function form_input($data = '', $value = '', $extra = '')
{
    $defaults = ['type' => 'text', 'name' => is_array($data) ? '' : $data];

    return "<input "._parse_form_attributes($data, $defaults).$extra." />";
}
