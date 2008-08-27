<?php

include_once dirname(__FILE__) . '/../../bootstrap/unit.php';
include_once dirname(__FILE__) . '/../../bootstrap/database.php';

$t = new lime_test(null, new lime_output_color());

//------------------------------------------------------------

$t->diag('MemberConfigPeer::retrieveByNameAndMemberId()');
$memberConfig = MemberConfigPeer::retrieveByNameAndMemberId('example', 1);
$t->isa_ok($memberConfig, 'MemberConfig', 'retrieveByNameAndMemberId() returns a MemberConfig');
$t->is($memberConfig->getValue(), 'test value', 'MemberConfig::getValue() returns a value');

$t->cmp_ok(MemberConfigPeer::retrieveByNameAndMemberId('example', 2), '===', NULL, 'retrieveByNameAndMemberId() returns NULL if member_config is not registered');
$t->cmp_ok(MemberConfigPeer::retrieveByNameAndMemberId('example', 999), '===', NULL, 'retrieveByNameAndMemberId() returns NULL if member does not exist');
$t->cmp_ok(MemberConfigPeer::retrieveByNameAndMemberId('unknown', 1), '===', NULL, 'retrieveByNameAndMemberId() returns NULL if name does not exist');