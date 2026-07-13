<?php

require_once __DIR__ . '/../../includes/queries.php';

assert(mutator_token('复仇者') === 'avenger');
assert(mission_token('升格之链') === 'chainofascension');
assert(original_name('mutators', '漆黑一片') === 'Afraid of the Dark');
assert(original_name('weekly_mutations', '亡者列车') === 'Train of the Dead');
$amonUnit = get_amonunit(1);
assert((int)$amonUnit['amonid'] === 1);
assert($amonUnit['_original_name'] === 'Zealot');

echo "Localization helper tests passed\n";
