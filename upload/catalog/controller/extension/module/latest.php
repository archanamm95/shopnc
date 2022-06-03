<?php
class ControllerExtensionModuleLatest extends Controller {
	public function index($setting) {

		$url= HTTP_MLMSERVER.'user-type/'.$this->customer->getUsername();
        $curl=curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response   = curl_exec($curl);
        curl_close($curl);
        $result =json_decode($curl_response,TRUE);

        $this->session->data['dealer']=false;

        if(!empty($this->customer->getUsername()))
        {
        	if($result['status']== true)
        	{

        		$this->session->data['dealer']=true;

        	}
        	else
        	{

        		$this->session->data['dealer']=false;

        	}

        }
        else
        {
        	$this->session->data['dealer']=false;

        }
		
		$this->load->language('extension/module/latest');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		$results = $this->model_catalog_product->getLatestProducts($setting['limit']);

		$filter_data = array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => $setting['limit']
		);
		
		$this->model_catalog_product->getProducts($filter_data);

			if(!isset($this->request    ->get['route']) || ($this->request->get['route'] == 'common/home')) {
				$data['iscarousel'] = 'owl-carousel';
			} else {
				$data['iscarousel'] = 'other-carousel';
			}

			if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
				$data['isproduct'] = 'latestblock';
			} else {
				$data['isproduct'] = 'latest-container';
			}

			if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
				$data['isspecials'] = 'latestproduct col-lg-4 col-md-6 col-sm-12 col-xs-12';
			} else {
				$data['isspecials'] = 'featured-products';
			}

			if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
				$data['istitle'] = 'home-title';
			} else {
				$data['istitle'] = 'page-title hidden-sm hidden-xs';
			}
			
		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				// Check Product Type (Share Partner)

				$product_attributes = $this->model_catalog_product->getProductAttributes($result['product_id']);

				if(!empty($product_attributes[0]['attribute_group_id']))
				{
					 if($product_attributes[0]['attribute_group_id'] == "7" && $product_attributes[0]['attribute'][0]['name'] == "is_share_partner")
                    {
                        $is_share_partner_product="true";
                    }
                    else
                    {
                        $is_share_partner_product="false"; 
                    }
				}
				else
				{
					$is_share_partner_product="false";
				}

				// Code Ends

				// Check if user already purchased Share Partner Package

				$this->load->model('account/order');

				if($this->customer->isLogged())
				{

				$orders = $this->model_account_order->getOrders();

					foreach($orders as $order)
					{
						$products = $this->model_account_order->getOrderProducts($order['order_id']);

						foreach($products as $product)
						{
							$product_attributes = $this->model_catalog_product->getProductAttributes($product['product_id']);

							if(!empty($product_attributes[0]['attribute_group_id']))
							{
								if($product_attributes[0]['attribute_group_id'] == "7")
								{
									$purcahsed_share_product="true";
								}
							}
						}
					}
				}

				// Check if user already purchased Share Partner Package Code Ends

				// Show Share Products Only for dealers

				$product_array=array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
				
				if($this->session->data['dealer'] == false)
				{
					// If not Dealer

					if($is_share_partner_product == "false")
					{	

					$data['products'][] = $product_array;

					}
				}
				else
				{

					if(!empty($purcahsed_share_product))
					{
						if($is_share_partner_product == "false")
						{	

						$data['products'][] = $product_array;
						}

						}
						else
						{
						$data['products'][] = $product_array;
						}
				}

				// Code Ends
				
			}

			return $this->load->view('extension/module/latest', $data);
		}
	}
}
