<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto FwWoq; FwWoq: if (defined("\x42\x41\x53\x45\120\x41\124\110")) { goto eM34I; } goto VfosN; LWUNr: eM34I: goto nvu16; VfosN: exit("\116\x6f\x20\x64\151\x72\x65\143\164\x20\163\143\x72\x69\x70\x74\x20\141\x63\x63\145\x73\x73\40\x61\154\154\157\167\x65\144"); goto LWUNr; nvu16: class Compare extends CI_Controller { function __construct() { goto bJjy7; nYS1_: $this->CHARACTER_SET = "\x75\x74\146\70\x20\x43\117\114\x4c\x41\124\105\40\x75\164\x66\70\137\147\145\x6e\x65\x72\x61\x6c\137\143\151"; goto GRmyR; GRmyR: $this->DB1 = $this->load->database("\x6d\141\x69\156\137\x67\141\x72\x75\x64\141", TRUE); goto egyg2; egyg2: $this->DB2 = $this->load->database("\154\x69\166\x65", TRUE); goto iBNmm; bJjy7: parent::__construct(); goto nYS1_; iBNmm: } function index() { goto o1Azk; b6UzD: LXjok: goto EB3pk; klMdM: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\12"; cSiK7: } goto F4scJ; SJREQ: echo "\74\160\x72\145\76\12"; goto b6UzD; F4scJ: zsMDN: goto SJREQ; i0Tm3: echo "\x3c\x70\162\x65\x20\x73\164\171\154\x65\75\47\x70\141\x64\144\151\x6e\x67\72\40\62\60\160\x78\73\40\142\x61\x63\x6b\147\x72\157\165\x6e\x64\55\143\x6f\x6c\157\162\72\40\43\106\x46\106\x41\106\60\73\47\x3e\xa"; goto klMdM; UiZ6c: echo "\x3c\150\x32\76\124\x68\x65\x20\x64\x61\164\x61\x62\x61\x73\145\x20\151\x73\x20\x6f\165\x74\x20\157\146\x20\123\171\156\x63\x21\74\x2f\150\62\76\12"; goto baf3m; lf5Zp: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\x64\x72\x6f\160")) : array(); goto l9qeS; Gx7_I: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto CwhGJ; RIa95: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto Gx7_I; zOfXK: $live_tables = $this->DB2->list_tables(); goto aV3OP; ubl68: echo "\74\x68\62\76\124\150\x65\x20\144\141\x74\x61\142\x61\x73\145\40\141\x70\160\x65\x61\162\163\x20\x74\x6f\x20\142\145\40\x75\x70\x20\x74\x6f\40\144\x61\x74\145\74\x2f\150\x32\x3e\12"; goto W1ZOI; cYzz7: $tables_to_drop = array_diff($live_tables, $development_tables); goto NKiNb; o1Azk: $sql_commands_to_run = array(); goto NGC9j; W1ZOI: goto LXjok; goto ntWco; ntWco: aWuyt: goto UiZ6c; aV3OP: $tables_to_create = array_diff($development_tables, $live_tables); goto cYzz7; NKiNb: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\143\x72\x65\x61\164\145")) : array(); goto lf5Zp; l9qeS: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto RIa95; NGC9j: $development_tables = $this->DB1->list_tables(); goto zOfXK; CwhGJ: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto aWuyt; } goto ubl68; baf3m: echo "\74\160\x3e\124\x68\x65\40\x66\x6f\154\x6c\x6f\x77\151\x6e\x67\40\x53\x51\114\40\x63\x6f\155\155\141\156\144\163\x20\x6e\x65\145\x64\40\x74\157\x20\142\x65\x20\x65\170\145\143\x75\164\x65\144\x20\x74\x6f\x20\142\x72\x69\156\147\x20\164\150\145\x20\114\x69\166\145\40\x64\x61\x74\x61\142\x61\163\145\x20\164\x61\x62\x6c\145\163\x20\165\160\40\x74\x6f\40\144\x61\x74\145\72\x20\74\x2f\x70\x3e\xa"; goto i0Tm3; EB3pk: } function manage_tables($tables, $action) { goto ulTCm; KWPao: foreach ($tables as $table) { goto HN4x4; HN4x4: $query = $this->DB1->query("\x53\110\x4f\x57\x20\x43\122\x45\101\124\x45\x20\x54\x41\102\x4c\105\40\140{$table}\x60\x20\x2d\x2d\x20\143\x72\145\141\164\x65\40\x74\x61\142\x6c\x65\163"); goto O0QXl; j6S0r: $sql_commands_to_run[] = $table_structure["\103\x72\x65\141\164\x65\x20\124\x61\x62\x6c\x65"] . "\73"; goto PEnnB; O0QXl: $table_structure = $query->row_array(); goto j6S0r; PEnnB: wRxvS: goto sPowe; sPowe: } goto HpAVk; cwjkU: NZ9CT: goto iZDFE; iZDFE: bG3VM: goto DeEBf; DeEBf: return $sql_commands_to_run; goto pfhdb; RhHHJ: if (!($action == "\143\x72\145\141\164\x65")) { goto Fy9Dl; } goto KWPao; rkaKH: if (!($action == "\144\162\157\160")) { goto bG3VM; } goto OiJ4J; OiJ4J: foreach ($tables as $table) { $sql_commands_to_run[] = "\104\122\117\x50\40\x54\x41\102\x4c\x45\40{$table}\73"; VSNis: } goto cwjkU; ulTCm: $sql_commands_to_run = array(); goto RhHHJ; i8Xi7: Fy9Dl: goto rkaKH; HpAVk: ESET4: goto i8Xi7; pfhdb: } function compare_table_structures($development_tables, $live_tables) { goto OXr4A; mXm02: WTJKz: goto A5kWw; OXr4A: $tables_need_updating = array(); goto O5C9U; aP7hq: foreach ($live_tables as $table) { goto KRa9N; qxcL1: $table_structure = $query->row_array(); goto fzX0z; fzX0z: $live_table_structures[$table] = $table_structure["\103\162\x65\141\x74\145\x20\124\x61\x62\x6c\x65"]; goto JIf6L; JIf6L: ZMOq1: goto il8BV; KRa9N: $query = $this->DB2->query("\123\110\x4f\x57\x20\x43\x52\105\101\x54\x45\x20\124\x41\x42\x4c\x45\x20\140{$table}\x60\40\x2d\x2d\40\x6c\x69\x76\x65"); goto qxcL1; il8BV: } goto mXm02; pe7BK: TuD9P: goto UFk_Q; jddUO: foreach ($development_tables as $table) { goto coeTv; iH3eI: $development_table_structures[$table] = $table_structure["\103\162\x65\141\164\145\x20\124\x61\142\x6c\145"]; goto MJHL2; x8dIk: $table_structure = $query->row_array(); goto iH3eI; coeTv: $query = $this->DB1->query("\x53\x48\x4f\x57\40\x43\x52\105\101\x54\x45\x20\x54\101\102\x4c\105\x20\x60{$table}\x60\40\55\x2d\40\144\145\x76"); goto x8dIk; MJHL2: YaRqI: goto FGgFg; FGgFg: } goto owUb4; O5C9U: $live_table_structures = $development_table_structures = array(); goto jddUO; A5kWw: foreach ($development_tables as $table) { goto tg0Bp; tg0Bp: $development_table = $development_table_structures[$table]; goto XkUqu; rEKZl: lkHTO: goto aipz1; aipz1: ajo7j: goto NDjUb; XkUqu: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto DGvyt; DGvyt: if (!($this->count_differences($development_table, $live_table) > 0)) { goto lkHTO; } goto pF6Cf; pF6Cf: $tables_need_updating[] = $table; goto rEKZl; NDjUb: } goto pe7BK; owUb4: pSrRe: goto aP7hq; UFk_Q: return $tables_need_updating; goto gd7BC; gd7BC: } function count_differences($old, $new) { goto wQncl; xIIE2: rxqOY: goto R0ZlF; odP6R: CbJW7: goto suPaO; Ce3IE: return $differences; goto DznSK; NuSMn: if (!($old == $new)) { goto rxqOY; } goto DhBna; c6eVo: if (!($old[$i] != $new[$i])) { goto XktCJ; } goto rIt31; bbAOw: goto CbJW7; goto fLDDE; G9d8q: $new = explode("\40", $new); goto ro5EZ; NT0hB: $i = 0; goto odP6R; iAKn9: $i++; goto bbAOw; R0ZlF: $old = explode("\40", $old); goto G9d8q; wQncl: $differences = 0; goto txZjg; LxluW: X319J: goto iAKn9; rIt31: $differences++; goto PDLZP; txZjg: $old = trim(preg_replace("\x2f\x5c\163\x2b\x2f", '', $old)); goto xTNhj; ro5EZ: $length = max(count($old), count($new)); goto NT0hB; suPaO: if (!($i < $length)) { goto xE7Y1; } goto c6eVo; DhBna: return $differences; goto xIIE2; PDLZP: XktCJ: goto LxluW; fLDDE: xE7Y1: goto Ce3IE; xTNhj: $new = trim(preg_replace("\x2f\134\x73\x2b\x2f", '', $new)); goto NuSMn; DznSK: } function update_existing_tables($tables) { goto Rq6_3; Jsgjw: P2HO9: goto BUNn2; Hi7Tb: if (!(is_array($tables) && !empty($tables))) { goto G4R2A; } goto V1lFL; IudKG: return $sql_commands_to_run; goto T60Bp; V1lFL: foreach ($tables as $table) { goto lB9Yx; MHi2y: h7sMV: goto N7mQB; lB9Yx: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto WVG6l; WVG6l: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto MHi2y; N7mQB: } goto Jsgjw; Rq6_3: $sql_commands_to_run = array(); goto EE4kS; EE4kS: $table_structure_development = array(); goto OzdlT; YyrU_: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto IudKG; BUNn2: G4R2A: goto YyrU_; OzdlT: $table_structure_live = array(); goto Hi7Tb; T60Bp: } function table_field_data($database, $table) { goto QdKnf; FYHnD: $fields[] = $row; goto TeW8d; g1B7i: MSy15: goto hxvFh; fqf24: mysql_select_db($database["\144\x61\164\141\142\141\163\x65"]); goto klwDR; TeW8d: goto MSy15; goto V8rcz; eALid: return $fields; goto ZFkKO; V8rcz: bbpyg: goto eALid; klwDR: $result = mysql_query("\123\x48\x4f\127\x20\x43\x4f\x4c\x55\x4d\116\x53\40\x46\x52\x4f\x4d\x20\x60{$table}\140"); goto g1B7i; QdKnf: $conn = mysqli_connect($database["\x68\157\163\164\x6e\141\x6d\145"], $database["\165\x73\x65\162\x6e\x61\x6d\145"], $database["\x70\x61\x73\163\x77\x6f\162\144"]); goto fqf24; hxvFh: if (!($row = mysql_fetch_assoc($result))) { goto bbpyg; } goto FYHnD; ZFkKO: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto efG9c; JqeFn: foreach ($source_field_structures as $table => $fields) { goto L_JGC; L_JGC: foreach ($fields as $field) { goto kCsxV; hHeBq: T2K5z: goto zGXNu; j61nz: $add_field = "\x41\x4c\124\x45\x52\40\x54\101\102\114\105\40{$table}\40\101\104\104\x20\x43\117\x4c\125\115\x4e\40\140" . $field["\106\x69\x65\154\144"] . "\x60\40" . $field["\x54\x79\x70\145"] . "\x20\x43\x48\x41\122\101\x43\124\x45\x52\x20\x53\105\124\40" . $this->CHARACTER_SET; goto DXVH1; lLLO_: $modify_field .= isset($fields[$n]["\116\x75\x6c\x6c"]) && $fields[$n]["\x4e\165\x6c\154"] == "\x59\x45\x53" ? "\40\116\x55\x4c\x4c" : "\40\x4e\x4f\x54\40\116\125\114\x4c"; goto lvf8J; DGRmj: $modify_field .= "\73"; goto tIp2X; tIp2X: yQcBr: goto Mw7F1; FjH2E: FWBgp: goto KN9S7; XWlGs: if (!(is_array($differences) && !empty($differences))) { goto yQcBr; } goto qjfyo; h_SXh: IRUt7: goto DlNfB; eKqPF: if (!($n < count($fields))) { goto T2K5z; } goto SxYch; gfJ0w: Utzx5: goto U215j; DXVH1: $add_field .= isset($field["\116\165\154\154"]) && $field["\x4e\x75\154\x6c"] == "\x59\105\x53" ? "\x20\x4e\165\x6c\x6c" : ''; goto B1n8h; D3iIX: $sql_commands_to_run[] = $add_field; goto PzKTF; CkdBk: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto XWlGs; XO3c5: $modify_field .= isset($previous_field) && $previous_field != '' ? "\40\x41\x46\x54\x45\122\x20" . $previous_field : ''; goto DGRmj; gsTat: $sql_commands_to_run[] = $modify_field; goto FjH2E; yZKLn: $add_field .= "\73"; goto D3iIX; Jb4eJ: $n = 0; goto oOsvb; kCsxV: if ($this->in_array_recursive($field["\106\x69\145\154\144"], $destination_field_structures[$table])) { goto IRUt7; } goto j61nz; PzKTF: goto MIydL; goto h_SXh; KN9S7: yGQRU: goto ca28n; CdaDV: $add_field .= isset($field["\105\170\164\x72\141"]) && $field["\105\x78\164\162\141"] != '' ? "\x20" . $field["\x45\170\164\162\x61"] : ''; goto yZKLn; SvsA_: goto ii_ft; goto hHeBq; Mw7F1: $previous_field = $fields[$n]["\x46\151\x65\x6c\x64"]; goto HMyrz; HMyrz: I_Brx: goto YLkkG; DlNfB: $modify_field = ''; goto Jb4eJ; qjfyo: $modify_field = "\101\x4c\x54\x45\x52\40\x54\x41\x42\114\x45\x20{$table}\x20\x4d\117\104\111\x46\131\x20\103\x4f\x4c\125\x4d\116\40\140" . $fields[$n]["\106\151\145\x6c\x64"] . "\140\40" . $fields[$n]["\124\x79\x70\x65"] . "\x20\x43\110\x41\x52\x41\x43\124\x45\x52\40\123\x45\x54\x20" . $this->CHARACTER_SET; goto uJpby; SxYch: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\106\151\145\154\x64"] == $destination_field_structures[$table][$n]["\106\151\145\154\144"])) { goto I_Brx; } goto CkdBk; YLkkG: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto FWBgp; } goto gsTat; lvf8J: $modify_field .= isset($fields[$n]["\105\x78\x74\162\x61"]) && $fields[$n]["\x45\170\x74\162\x61"] != '' ? "\x20" . $fields[$n]["\x45\170\164\x72\x61"] : ''; goto XO3c5; zGXNu: MIydL: goto gfJ0w; oOsvb: ii_ft: goto eKqPF; B1n8h: $add_field .= "\x20\x44\x45\106\101\125\114\x54\x20" . $field["\x44\145\x66\141\165\154\164"]; goto CdaDV; ca28n: $n++; goto SvsA_; uJpby: $modify_field .= isset($fields[$n]["\x44\145\146\141\x75\154\164"]) && $fields[$n]["\x44\145\146\x61\x75\x6c\x74"] != '' ? "\40\104\x45\x46\x41\125\114\124\x20\47" . $fields[$n]["\104\x65\x66\141\165\154\x74"] . "\47" : ''; goto lLLO_; U215j: } goto IHi_5; A6kvJ: yoHOr: goto Srtbp; IHi_5: Bf38L: goto A6kvJ; Srtbp: } goto G3XeK; W9YZ6: return $sql_commands_to_run; goto XIoRE; G3XeK: U48gL: goto W9YZ6; efG9c: $sql_commands_to_run = array(); goto JqeFn; XIoRE: } function in_array_recursive($needle, $haystack, $strict = false) { goto pSf1f; uzon5: return false; goto y0cWQ; OwP6r: zQITO: goto uzon5; pSf1f: foreach ($haystack as $array => $item) { goto eb0BH; OkYUn: oVJUh: goto Pby6E; AghpO: UQFWU: goto OkYUn; oG5fx: return true; goto AghpO; UBPK5: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto UQFWU; } goto oG5fx; eb0BH: $item = $item["\x46\x69\145\154\x64"]; goto UBPK5; Pby6E: } goto OwP6r; y0cWQ: } }
