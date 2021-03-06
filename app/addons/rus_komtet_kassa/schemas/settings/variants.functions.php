<?php

function fn_settings_variants_addons_rus_komtet_kassa_statuses_paid()
{
    return fn_get_simple_statuses(STATUSES_ORDER);
}

function fn_settings_variants_addons_rus_komtet_kassa_statuses_refund()
{
    return fn_get_simple_statuses(STATUSES_ORDER);
}

function fn_settings_variants_addons_rus_komtet_kassa_payment_systems()
{
    $result = array();
    $payments = fn_get_payments(DESCR_SL);

    foreach ($payments as $payment) {
        $result[$payment['payment_id']] = $payment['payment'];
    }

    return $result;
}

function fn_settings_variants_addons_rus_komtet_kassa_default_sno()
{
    $result = array();
    $schema = fn_get_schema('rus_komtet_kassa', 'default_sno');

    foreach ($schema as $key => $item) {
        $result[$key] = $item['name'];
    }

    return $result;
}

function fn_settings_variants_addons_rus_komtet_kassa_default_vat()
{
    $result = array();
    $schema = fn_get_schema('rus_komtet_kassa', 'default_vat');

    foreach ($schema as $key => $item) {
        $result[$key] = $item['name'];
    }

    return $result;
}

function fn_settings_variants_addons_rus_komtet_kassa_is_print_check()
{
    return array(
        true => "Да",
        false => "Нет",
    );
}
