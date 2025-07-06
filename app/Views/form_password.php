<?php
function form_password($data = '', $value = '', $extra = '')
{
    if (is_array($data)) {
        $data['type'] = 'password';
    } else {
        $data = ['type' => 'password', 'name' => $data];
    }
}
