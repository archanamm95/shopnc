<?php
class ControllerExtensionModuleIshiGalleryBlock extends Controller {
	public function index($setting) {
		static $module = 0;
		$this->load->model('tool/image');
		
		$data['banners'] = array();
		$banners = $setting['ishibanner'];
		$language_id = $this->config->get('config_language_id');
		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}
		$data['style'] = $setting['style'];
		$data['ishi_randomnumer'] = "ishigalleryblock-" . rand();
		$data['scale'] = (isset($setting['scale']) && $setting['scale'] == 1) ? 'scale' : '';

		$lang = $this->config->get('config_language_id');

		if(!empty($banners)){
			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {
					$reltitle = str_replace(' ', '-', $banner['title'][$lang]);
					$data['banners'][] = array(
						'title' => $banner['title'][$lang],
						'reltitle' => $reltitle,
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}
		$data['module'] = $module++;

		return $this->load->view('extension/module/ishigalleryblock', $data);
	}
}