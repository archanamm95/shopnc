<?php
class ControllerProductAllProduct extends Controller
{
    public function index()
    { 

        if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
             $base = $this->config->get('config_ssl');
        } else {
             $base = $this->config->get('config_url');
        }

        $this->load->language('product/category');

        $this->load->model('catalog/product');

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'p.sort_order';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }
        if (isset($this->request->get['filter'])) {
            $filter = $this->request->get['filter'];
        } else {
            $filter = '';
        }
        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }
        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }


        if (isset($this->request->get['type'])) {

            $this->session->data['influencer']=true;

        }
        else
        {
            $this->session->data['influencer']=false;

        }

        

        if (isset($this->request->get['purchase'])) {

            $decoded_sponsor_purchase=base64_decode($this->request->get['purchase']);
            $url= HTTP_MLMSERVER.'check-sponsor/'.$decoded_sponsor_purchase;
            $curl=curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $curl_response   = curl_exec($curl);
            curl_close($curl);
            $result =json_decode($curl_response,TRUE);

            if($result ==  null || empty($result))
            {
                header('Location:'.$base.'index.php?route='.$this->request->get['route']);
            }

            if($result['status'] == true)
            {

            $this->session->data['purchase_session']=$decoded_sponsor_purchase;

            }
            else
            {

             $this->session->data['purchase_session']=MLM_COMPANY;

            }
        }

        if(isset($this->session->data['purchase_session']))
        {
            $this->session->data['purchase_session']=$this->session->data['purchase_session'];

        }
        else {
            $this->session->data['purchase_session']= MLM_COMPANY; 
        }

        $url = '';

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }
            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['sorts'] = array();

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_default'),
                'value' => 'p.sort_order-ASC',
                'href'  => $this->url->link('product/all_product', '&sort=p.sort_order&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_name_asc'),
                'value' => 'pd.name-ASC',
                'href'  => $this->url->link('product/all_product', '&sort=pd.name&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_name_desc'),
                'value' => 'pd.name-DESC',
                'href'  => $this->url->link('product/all_product', '&sort=pd.name&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href'  => $this->url->link('product/all_product',  '&sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href'  => $this->url->link('product/all_product', '&sort=p.price&order=DESC' . $url)
            );

            if ($this->config->get('config_review_status')) {
                $data['sorts'][] = array(
                    'text'  => $this->language->get('text_rating_desc'),
                    'value' => 'rating-DESC',
                    'href'  => $this->url->link('product/all_product', '&sort=rating&order=DESC' . $url)
                );

                $data['sorts'][] = array(
                    'text'  => $this->language->get('text_rating_asc'),
                    'value' => 'rating-ASC',
                    'href'  => $this->url->link('product/all_product', '&sort=rating&order=ASC' . $url)
                );
            }

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_model_asc'),
                'value' => 'p.model-ASC',
                'href'  => $this->url->link('product/all_product','&sort=p.model&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_model_desc'),
                'value' => 'p.model-DESC',
                'href'  => $this->url->link('product/all_product','&sort=p.model&order=DESC' . $url)
            );


            $data['limits'] = array();

            $limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

            sort($limits);

            foreach($limits as $value) {
                $data['limits'][] = array(
                    'text'  => $value,
                    'value' => $value,
                    'href'  => $this->url->link('product/all_product',   $url . '&limit=' . $value)
                );
            }

            $filter_data = array(
    
                'filter_filter'      => $filter,
                'sort'               => $sort,
                'order'              => $order,
                'start'              => ($page - 1) * $limit,
                'limit'              => $limit
            );

        $data['sort'] = $sort;
        $data['order'] = $order;
        $data['limit'] = $limit;    
        $this->session->data['user_details'] = $_POST;
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_middle'] = $this->load->controller('common/content_middle');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $data['products'] = array();
        $product_total = $this->model_catalog_product->getTotalProducts();

        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {

             $results = $this->model_catalog_product->getProducts();
         }
         else
         {
            $results = $this->model_catalog_product->getProducts($filter_data);
         }

            foreach ($results as $result) {

                if (($this->request->server['REQUEST_METHOD'] == 'POST')) {

                    $results = $this->model_catalog_product->getProducts();

                    $this->session->data['checked_price']=$this->request->post['prices'];

                    $price_range=  $this->session->data['checked_price'];
                    $data['checked_price']=$this->request->post['prices'];
                    $minimum_price=strtok($price_range, '-');
                    $maximum_price=substr($price_range,strlen($minimum_price)+1, 10);

                }
                else
                {
                    $minimum_price=0;
                    $maximum_price=$this->model_catalog_product->highestPricedProduct();
                }

                if($minimum_price <= $result['price'] && $result['price'] <= $maximum_price)
                {
                    // Price Filter

                $extraimage = '';
                
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                }
                $images = $this->model_catalog_product->getProductImages($result['product_id']);

                if(!empty($images) && isset($images[0]['image'])){
                 $extraimage = $this->model_tool_image->resize($images[0]['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
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
                    $rating = (int)$result['rating'];
                } else {
                    $rating = false;
                }
                
                $stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
                $specialDates = $this->model_catalog_product->getProductSpecialsDate($result['product_id']);
                
                if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
                    $date_end  = $specialDates['date_end'];
                }else{
                    $date_end = '';
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

                $purcahsed_share_product= $this->model_account_order->PurchasedSharePartner();

                // Check if user already purchased Share Partner Package Code Ends

                // Show Share Products Only for dealers

                $product_array=array(
                        'product_id'  => $result['product_id'],
                        'thumb'       => $image,
                        'extra'       => $extraimage,
                        'stock_status'=> $stock_status,
                        'date_end'    => $date_end,
                        'name'        => $result['name'],
                        'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                        'price'       => $price,
                        'special'     => $special,
                        'tax'         => $tax,
                        'rating'      => $rating,
                        'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
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

            }

       $this->response->setOutput($this->load->view('product/product_all', $data));

    }
}