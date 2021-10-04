<select id="multisite_selector" style="width:180px;">
    <option value="">Select Country</option>
    <option value="{{ config('panel.sites.uk.url') }}" {{ config('panel.sites.uk.key') == config('panel.sites.current') ? "selected": "" }} data-image="{{ asset("asset/frontend/images/msdropdown/icons/blank.gif") }}" data-imagecss="flag zw" data-title="World">World</option>
    <option value="{{ config('panel.sites.norway.url') }}" {{ config('panel.sites.norway.key') == config('panel.sites.current') ? "selected": "" }} data-image="{{ asset("asset/frontend/images/msdropdown/icons/blank.gif") }}" data-imagecss="flag no" data-title="Norway">Norway</option>
    
</select>
