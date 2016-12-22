<?php
function set_radio($field = '', $value = '', $default = FALSE)
{
    $OBJ =& _get_validation_object();
    if ($OBJ === FALSE)
    {
        if ( ! isset($_POST[$field]))
        {
            if (count($_POST) === 0 AND $default == TRUE)
            {
                return ' checked="checked"';
            }
            return '';
        }
        $field = $_POST[$field];
        if (is_array($field))
        {
            if ( ! in_array($value, $field))
            {
                return '';
            }
        }
        else
        {
            if (($field == '' OR $value == '') OR ($field != $value))
            {
                return '';
            }
        }
        return ' checked="checked"';
    }
    # this is what I modified:
    $a = $OBJ->set_radio($field, $value, $default);
    $b = array(
        'field'     => $field,
        'value'     => $value,
        'default'   => $default,
        'return'    => $a
    );
    log_message('debug',json_encode($b));
    return $a;
}