<?php

if (!function_exists('nj_get_email_templates')) {
    /**
     * @return array
     */
    function nj_get_email_templates() {
        $data = file_get_contents(env('EMAIL_BUILDER_API_ENDPOINT').'/?action=get_templates');
        if(empty($data)){
            return [];
        }
        $data = json_decode($data);
        if(is_array($data)){
            $result = [];
            foreach ($data as $db){
                $result[] = (object)[
                    'id' => @$db->TemplateId,
                    'name' => @$db->TemplateName,
                    'content' => @$db->TemplateContent,
                ];
            }
            return $result;
        }
        return [];
    }
}

if (!function_exists('get_email_template_html_by_id')) {
    /**
     * @param $template_id
     * @return ''|null
     */
    function get_email_template_html_by_id($template_id) {
        $data = file_get_contents(env('EMAIL_BUILDER_API_ENDPOINT').'/?action=get_template_content_html&template_id='.$template_id);
        if(empty($data)){
            return null;
        }
        $data = json_decode($data);
        if(is_object($data)){
            return @$data->html;
        }
        return null;
    }
}


if(!function_exists('sl_countries')){
    function sl_countries($countries = []) {
        $result = app(PragmaRX\Countries\Package\Countries::class);
//        if($countries){
//            $result = $result->whereIn("cca2", $countries);
//            dd($result);
////            ->get();
//        }else{
//             $result = $result->all();
//        }
        $result = $result->all();
        $result = $result->map(function ($country) {
                $commonName = $country->name->common;
                $languages = $country->languages ?? collect();
                $language = $languages->keys()->first() ?? null;
                $nativeNames = $country->name->native ?? null;
                if (filled($language) && filled($nativeNames) && filled($nativeNames[$language]) ?? null) {
                    $native = $nativeNames[$language]['common'] ?? null;
                }
                if (blank($native ?? null) && filled($nativeNames)) {
                    $native = $nativeNames->first()['common'] ?? null;
                }
                $native = $native ?? $commonName;
                if ($native !== $commonName && filled($native)) {
                    $native = "$native ($commonName)";
                }
                return (object)[
                    'code' => $country->cca2,
                    'name' => $native,
                ];
                //return [$country->cca2 => $native];
            })
            ->values();

        if(!empty($countries)){
            $result = $result->filter(function($country) use ($countries) {
                return in_array($country->code, $countries);
            });
        }

        return $result->toArray();
    }
}

if(!function_exists('sl_get_current_country')){
    function sl_get_current_country(){
        $ipinfo = @request()->ipinfo;
        return strtoupper(@$ipinfo->country);
    }
}

if(!function_exists('sl_set_current_country_site')){
    function sl_set_current_country_site(){
        $req = request();
        $que = $req->query();
        $query = !empty($que) ? '?'.http_build_query($que): '';
        $country = 'en';
        switch ($country) {
            case 'in':
            case 'no':
            break;
            case 'en':
            default:
                $country = '';
            break;
        }

        $new_url = $req->getSchemeAndHttpHost() .
                    ($country?'/' .$country: '') .
                    ($req->path() && $req->path() != "/" ? '/' .$req->path(): '');
        if($new_url !== $req->url()){
            $new_url .= $query;
            header("Location: $new_url"); exit;
        }
    }
}
