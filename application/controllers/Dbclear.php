<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\x45\x50\101\x54\110") or exit("\x4e\157\40\x64\151\x72\145\x63\164\40\x73\x63\162\151\x70\x74\40\x61\143\x63\x65\163\163\x20\141\x6c\x6c\x6f\x77\145\144"); class Dbclear extends CI_Controller { public function __construct() { goto zwQeh; zwQeh: parent::__construct(); goto S0Gej; R13GG: $this->load->dbforge(); goto wV8m6; wV8m6: $this->load->model("\123\145\164\x74\x69\156\x67\x73\x5f\155\x6f\144\145\x6c", "\x73\x65\164\x74\x69\x6e\147\163"); goto bGq8s; lSPUZ: P2y6x: goto zChhe; S0Gej: if (!$this->ion_auth->logged_in()) { goto P2y6x; } goto z28P0; T1l_E: $this->load->helper("\144\x69\x72\145\143\164\x6f\x72\x79"); goto V1iCB; z28P0: if ($this->ion_auth->is_admin()) { goto HjPdB; } goto CXTXm; K4ZyR: $this->load->library("\x75\x70\x6c\x6f\x61\x64"); goto R13GG; zChhe: redirect("\x61\165\164\x68"); goto QOQGQ; i4QUg: goto pckEM; goto lSPUZ; CXTXm: show_error("\x48\x61\156\171\141\x20\x41\x64\155\x69\x6e\x20\171\141\x6e\147\40\142\157\x6c\x65\150\40\155\145\156\147\x61\153\163\145\x73\x20\x68\x61\154\141\155\x61\x6e\x20\x69\x6e\151", 403, "\x41\153\x73\145\x73\40\144\151\x6c\141\162\141\x6e\147"); goto uhEhy; uhEhy: HjPdB: goto i4QUg; bGq8s: $this->load->model("\x44\x61\x73\x68\x62\x6f\141\162\x64\137\155\157\144\x65\x6c", "\x64\141\x73\x68\x62\157\141\162\x64"); goto T1l_E; QOQGQ: pckEM: goto K4ZyR; V1iCB: } public function output_json($data, $encode = true) { goto eQqu6; XYXlM: $data = json_encode($data); goto E9kjC; E9kjC: e22R8: goto KgH4D; eQqu6: if (!$encode) { goto e22R8; } goto XYXlM; KgH4D: $this->output->set_content_type("\x61\160\x70\x6c\151\143\x61\x74\151\157\x6e\57\x6a\x73\x6f\x6e")->set_output($data); goto e3gq4; e3gq4: } public function index() { goto ghlnJ; ZBFEn: $json = (array) $json; goto l0G2c; l0G2c: $user = $this->ion_auth->user()->row(); goto aj1GH; tuOTc: $excludes = ["\x62\x75\153\x75\137\x69\x6e\x64\165\x6b", "\141\160\151\x5f\163\145\x74\164\151\x6e\x67", "\x61\x70\x69\x5f\164\157\x6b\x65\x6e", "\142\x75\x6c\x61\156", "\150\141\x72\x69", "\163\x65\164\x74\151\156\147", "\143\x62\164\x5f\x6a\x65\x6e\151\x73", "\x63\142\164\x5f\162\165\141\x6e\147", "\x63\x62\x74\x5f\x73\x65\x73\151", "\143\142\x74\137\164\157\153\x65\156", "\154\145\166\145\x6c\137\x67\x75\x72\165", "\154\x65\166\145\154\x5f\x6b\x65\154\141\163", "\x6d\x61\163\x74\145\x72\137\164\160", "\155\141\x73\x74\145\162\x5f\x73\x6d\x74", "\x6d\141\x73\x74\145\x72\137\x68\141\x72\x69\137\x65\x66\145\x6b\x74\151\146", "\165\163\x65\162\x73", "\x67\162\x6f\165\160\163", "\x75\163\x65\x72\163\x5f\x67\162\x6f\x75\x70\x73", "\154\157\147\151\156\137\x61\x74\164\x65\x6d\x70\164\163", "\165\x73\145\162\x73\x5f\160\162\x6f\x66\151\x6c\145", "\162\x61\x70\x6f\x72\137\141\144\155\x69\x6e\x5f\x73\145\x74\x74\x69\x6e\147", "\162\x75\156\156\x69\x6e\147\x5f\164\x65\x78\x74"]; goto iQ3ib; qbbxQ: $this->load->view("\x5f\x74\145\x6d\x70\154\x61\x74\145\163\x2f\x64\141\163\x68\x62\157\x61\162\144\57\137\x66\157\x6f\164\x65\x72"); goto Geo5q; aj1GH: $data = ["\x75\x73\145\162" => $user, "\x6a\x75\x64\165\154" => "\x42\145\162\x73\x69\x68\153\141\x6e\x20\x44\141\164\x61", "\163\165\x62\152\x75\x64\x75\x6c" => "\110\x61\160\165\x73\40\104\x61\164\141", "\160\x72\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto JxnnS; VR2jC: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto bbL7G; l3Oj4: foreach ($tables as $table) { goto lYw5y; jMxW0: $this->dbforge->drop_table($table, true); goto QFo8s; y1r2s: SuslW: goto J1jCo; b5WS3: $data_tables[$table_info["\153\145\164"]][] = $table_info; goto MM6wl; QFo8s: goto v7pRx; goto RSV4j; Eq8Qz: if (in_array($table, $excludes)) { goto j8wiN; } goto AWwDw; NaULN: yR63t: goto Eq8Qz; KBDJS: $table_info = ["\153\145\x74" => $this->keterangan()[$table], "\x73\x69\x7a\145" => $this->settings->rowSize($table), "\164\x61\142\x6c\145" => $table, "\156\x61\155\145" => ucwords($name)]; goto b5WS3; GQ8BB: if ($table == "\x62\x75\153\x75\137\x6e\x69\154\x61\151") { goto N4PRs; } goto jMxW0; aaCOF: uPH5j: goto KX2vE; EuzrR: v7pRx: goto aaCOF; ph7ww: if (in_array($table, $excludes)) { goto uPH5j; } goto GQ8BB; KX2vE: goto uXXOX; goto NaULN; MM6wl: j8wiN: goto MRJQO; AWwDw: $name = str_replace("\137", "\40", $table); goto KBDJS; xRD2y: $this->dbforge->drop_table("\x62\165\153\165\x5f\156\x69\154\141\x69", true); goto Ha_ww; MRJQO: uXXOX: goto y1r2s; lYw5y: if (isset($json[$table])) { goto yR63t; } goto ph7ww; RSV4j: N4PRs: goto jH8LF; jH8LF: $nums = $this->db->get("\142\x75\x6b\x75\137\156\x69\154\141\151")->num_rows(); goto qWQSj; Ha_ww: DRQWG: goto EuzrR; qWQSj: if (!($nums == 0)) { goto DRQWG; } goto xRD2y; J1jCo: } goto ZXj8U; iH2P4: $this->load->view("\x5f\x74\145\x6d\x70\x6c\141\x74\x65\x73\x2f\x64\141\x73\150\142\x6f\x61\x72\144\57\137\x68\145\141\144\145\162", $data); goto Z1a4h; pFf7v: $data["\x74\x70\x5f\141\143\164\x69\166\145"] = $this->dashboard->getTahunActive(); goto VR2jC; ZXj8U: Azjiy: goto CJ9cS; JxnnS: $data["\164\160"] = $this->dashboard->getTahun(); goto pFf7v; ghlnJ: $json = file_get_contents("\56\x2f\141\163\x73\145\164\163\x2f\141\x70\x70\57\x64\x62\x2f\x64\141\164\x61\142\141\x73\x65\56\x6a\163\157\156"); goto RdL2i; bbL7G: $data["\163\155\164\137\x61\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto tuOTc; Z1a4h: $this->load->view("\x73\145\x74\164\x69\156\x67\57\155\x61\156\x61\x67\145"); goto qbbxQ; RdL2i: $json = json_decode($json); goto ZBFEn; CJ9cS: $data["\x74\141\x62\x6c\145\x73"] = $data_tables; goto iH2P4; iQ3ib: $data_tables = []; goto oJQF3; oJQF3: $tables = $this->db->list_tables(); goto l3Oj4; Geo5q: } public function hapusTable() { goto VAyBe; f1Vco: $this->db->truncate($table); goto B1rJ5; TRNdD: $this->load->dbutil(); goto yyMoH; VAyBe: $table = $this->input->post("\164\141\x62\x6c\x65", true); goto TRNdD; yyMoH: $prefs = ["\164\x61\142\154\x65\x73" => array($table), "\x69\x67\156\x6f\162\145" => array(), "\146\157\162\x6d\141\x74" => "\x74\170\164", "\146\151\154\145\x6e\141\155\x65" => $table . "\x2e\x73\x71\154", "\x61\x64\x64\x5f\144\162\x6f\160" => TRUE, "\x61\144\x64\137\x69\x6e\163\145\x72\164" => TRUE, "\x6e\x65\x77\154\151\x6e\x65" => "\xa"]; goto iadQT; mluOt: $this->load->helper("\x66\151\154\145"); goto Z2Nvn; Z2Nvn: write_file("\56\57\x62\x61\x63\x6b\165\x70\163\57\142\x61\x63\153\165\160\137" . $table . "\137" . date("\x59\137\x6d\137\144\x5f\x48\x5f\x69\137\x73") . "\56\163\161\x6c", $backup); goto f1Vco; B1rJ5: $this->output_json(["\x74\x79\160\x65" => "\x64\141\164\x61\142\x61\x73\145", "\155\x65\163\x73\141\x67\145" => "\x44\x61\164\x61\142\141\x73\145\x20\x62\x65\x72\x68\141\163\151\154\x20\x64\151\150\141\x70\x75\163"]); goto C6cvm; iadQT: $backup = $this->dbutil->backup(array($prefs)); goto mluOt; C6cvm: } public function truncate() { goto sQo0b; PEQOb: $this->settings->truncate($tables); goto Q9Fpv; sQo0b: $tables = $this->db->list_tables(); goto PEQOb; Q9Fpv: $this->output_json(["\x73\164\141\164\x75\x73" => true]); goto lff_1; lff_1: } private function keterangan() { $data = ["\x61\x70\151\x5f\x73\x65\x74\164\x69\x6e\147" => "\x31", "\x61\160\151\x5f\x74\157\153\145\x6e" => "\61", "\142\165\153\165\x5f\x69\156\144\165\x6b" => "\61", "\x62\165\154\x61\156" => "\x30", "\x63\x62\164\137\142\x61\x6e\153\x5f\x73\x6f\x61\x6c" => "\x32", "\143\x62\164\137\x64\165\162\141\163\151\137\163\151\163\167\x61" => "\x32", "\143\142\164\137\152\141\144\x77\x61\154" => "\62", "\x63\x62\164\x5f\152\x61\x64\x77\141\154\137\165\x6a\151\x61\156" => "\62", "\x63\142\x74\x5f\x6a\145\156\151\x73" => "\60", "\143\142\164\x5f\153\145\154\141\163\x5f\162\165\x61\156\x67" => "\x32", "\x63\x62\164\x5f\153\x6f\160\x5f\141\x62\163\145\x6e\x73\x69" => "\x31", "\143\142\164\x5f\x6b\x6f\160\137\142\x65\x72\x69\164\141" => "\x31", "\143\x62\164\137\x6b\157\x70\137\x6b\141\x72\x74\x75" => "\x31", "\143\x62\x74\137\156\x69\x6c\141\x69" => "\x32", "\143\x62\x74\137\x6e\x6f\x6d\157\x72\x5f\x70\x65\163\145\162\x74\x61" => "\62", "\143\x62\164\137\x70\x65\156\147\x61\167\x61\x73" => "\62", "\143\142\164\137\162\145\153\x61\x70" => "\x32", "\143\142\164\137\162\145\153\141\x70\137\x6e\x69\154\141\151" => "\62", "\143\x62\x74\x5f\x72\x75\141\x6e\147" => "\x31", "\x63\x62\164\x5f\163\x65\x73\x69" => "\x31", "\x63\142\x74\x5f\163\145\x73\151\x5f\x73\151\163\167\x61" => "\62", "\143\142\164\137\163\x6f\x61\x6c" => "\62", "\x63\x62\x74\137\x73\x6f\x61\154\137\163\x69\x73\167\141" => "\x32", "\x63\x62\x74\137\164\x6f\x6b\145\x6e" => "\61", "\x67\x72\157\x75\x70\x73" => "\x30", "\x68\x61\162\151" => "\x30", "\x6a\141\142\141\x74\x61\156\137\147\165\162\x75" => "\61", "\153\145\x6c\141\x73\137\x63\141\x74\x61\x74\141\x6e\x5f\x6d\x61\160\x65\154" => "\x32", "\x6b\x65\154\x61\x73\137\x63\x61\164\x61\x74\x61\156\x5f\x77\141\154\151" => "\x32", "\x6b\x65\154\141\163\137\145\x6b\x73\164\x72\x61" => "\61", "\153\145\154\x61\x73\137\x6a\141\144\167\141\x6c\x5f\x6b\x62\x6d" => "\x32", "\x6b\145\x6c\x61\163\x5f\x6a\x61\144\x77\141\154\137\155\x61\x70\145\154" => "\x32", "\153\145\x6c\x61\x73\137\x6a\x61\144\167\x61\154\137\x6d\141\164\145\x72\151" => "\62", "\x6b\145\x6c\141\x73\137\x6a\x61\x64\167\x61\154\137\x74\x75\x67\141\x73" => "\x32", "\x6b\145\154\141\x73\x5f\155\141\x74\145\162\151" => "\x32", "\x6b\x65\x6c\141\163\137\x73\x69\163\167\141" => "\62", "\153\x65\x6c\x61\163\x5f\163\x74\162\165\153\x74\x75\162" => "\x32", "\153\145\x6c\141\x73\137\164\x75\147\x61\163" => "\62", "\154\145\x76\145\154\x5f\x67\x75\162\165" => "\x30", "\154\145\166\x65\154\x5f\x6b\145\x6c\141\x73" => "\60", "\154\157\147" => "\62", "\154\157\x67\151\156\x5f\141\164\x74\145\155\160\164\163" => "\60", "\154\157\x67\137\x6d\x61\x74\x65\x72\151" => "\62", "\154\x6f\x67\137\164\165\x67\141\163" => "\x32", "\154\157\x67\137\165\x6a\x69\141\x6e" => "\62", "\x6d\141\163\164\x65\162\x5f\x65\153\163\164\162\x61" => "\x31", "\x6d\141\x73\x74\x65\x72\x5f\x67\165\x72\x75" => "\61", "\155\141\163\164\145\162\x5f\x68\x61\162\151\137\145\146\145\x6b\x74\x69\146" => "\x31", "\x6d\141\x73\x74\145\x72\x5f\152\165\x72\x75\x73\141\x6e" => "\x31", "\x6d\x61\163\164\145\x72\137\153\145\x6c\141\x73" => "\61", "\x6d\x61\163\164\145\x72\x5f\153\x65\154\157\x6d\160\157\153\x5f\155\141\x70\145\x6c" => "\x31", "\155\141\163\x74\x65\162\x5f\155\x61\x70\x65\x6c" => "\x31", "\155\x61\x73\164\145\162\137\x73\151\163\167\141" => "\x31", "\x6d\141\163\164\145\162\x5f\x73\x6d\164" => "\60", "\155\x61\163\164\x65\162\137\164\x70" => "\60", "\x70\x6f\x73\x74" => "\62", "\160\157\x73\x74\x5f\143\x6f\x6d\155\x65\156\164\163" => "\x32", "\160\157\x73\x74\x5f\162\x65\x70\154\171" => "\x32", "\162\x61\160\157\162\x5f\x61\144\x6d\x69\156\x5f\x73\x65\164\x74\151\156\x67" => "\x31", "\162\x61\x70\157\162\137\x63\141\164\141\164\x61\x6e\x5f\x77\141\x6c\151" => "\61", "\x72\x61\x70\x6f\x72\x5f\144\x61\164\141\137\143\x61\x74\141\x74\141\x6e" => "\61", "\162\141\160\157\162\137\144\141\x74\141\x5f\x66\x69\x73\151\x6b" => "\x31", "\162\141\160\157\x72\137\x64\x61\x74\x61\x5f\x73\151\153\x61\x70" => "\x31", "\162\x61\x70\x6f\x72\x5f\146\x69\x73\151\x6b" => "\x31", "\x72\141\160\157\162\x5f\153\x69\153\144" => "\61", "\162\x61\x70\x6f\162\137\153\153\155" => "\61", "\x72\141\x70\157\162\x5f\x6e\x61\x69\153" => "\x31", "\x72\141\x70\x6f\x72\x5f\156\151\154\x61\x69\x5f\141\x6b\x68\151\162" => "\61", "\162\x61\160\x6f\162\x5f\x6e\151\x6c\x61\151\137\145\153\163\164\162\x61" => "\x31", "\162\141\160\157\162\x5f\x6e\151\154\141\151\137\150\x61\x72\x69\141\x6e" => "\61", "\162\141\160\x6f\162\x5f\x6e\151\154\x61\x69\137\x70\164\x73" => "\61", "\x72\141\160\157\x72\x5f\x6e\151\154\141\151\x5f\163\x69\153\x61\x70" => "\61", "\x72\141\160\157\162\137\x70\162\145\163\x74\x61\163\x69" => "\61", "\162\165\156\156\151\x6e\x67\137\x74\145\x78\x74" => "\x31", "\163\x65\164\x74\151\156\147" => "\61", "\x75\x73\x65\x72\x73" => "\x30", "\x75\x73\x65\x72\163\137\x67\162\x6f\x75\160\x73" => "\x30", "\x75\x73\145\162\163\x5f\x70\x72\157\146\x69\x6c\x65" => "\x30"]; return $data; } }
