<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\x45\x50\x41\x54\110") or exit("\x4e\157\40\144\x69\162\x65\x63\x74\x20\163\143\162\x69\160\164\40\141\x63\x63\145\163\x73\x20\x61\154\154\x6f\x77\x65\x64"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; class Datamapel extends CI_Controller { public function __construct() { goto Da8D_; aZ1yT: goto eJxPp; goto aEDwd; QE0aD: show_error("\110\141\156\171\x61\40\x41\x64\155\x69\156\151\163\164\x72\141\164\x6f\x72\x20\x79\141\156\x67\x20\x64\151\142\145\x72\x69\x20\x68\141\x6b\x20\165\x6e\164\x75\x6b\x20\x6d\x65\156\147\x61\x6b\x73\145\163\40\150\x61\154\x61\x6d\141\156\40\151\156\151\x2c\40\74\141\x20\150\x72\145\x66\75\x22" . base_url("\144\141\163\150\142\157\x61\x72\x64") . "\x22\x3e\x4b\145\x6d\x62\141\x6c\151\x20\x6b\x65\x20\155\145\x6e\165\x20\141\x77\x61\x6c\74\57\141\76", 403, "\x41\x6b\163\145\x73\x20\124\145\162\x6c\x61\162\141\x6e\x67"); goto dVLmq; qsK72: if ($this->ion_auth->is_admin()) { goto jotkL; } goto QE0aD; aEDwd: gUALP: goto E1e4z; skOiq: eJxPp: goto DXN63; leQQr: $this->load->model("\x4d\141\163\x74\145\162\x5f\155\x6f\144\x65\154", "\155\141\163\164\x65\162"); goto kIkhS; wcTul: $this->form_validation->set_error_delimiters('', ''); goto LcyLc; dd2f_: if (!$this->ion_auth->logged_in()) { goto gUALP; } goto qsK72; kIkhS: $this->load->model("\104\x61\163\x68\142\157\141\162\x64\137\x6d\x6f\144\145\x6c", "\144\141\163\150\x62\157\x61\162\x64"); goto i0Km4; i0Km4: $this->load->model("\104\x72\x6f\160\144\157\x77\x6e\137\x6d\157\144\145\x6c", "\x64\162\157\x70\x64\x6f\167\156"); goto wcTul; Da8D_: parent::__construct(); goto dd2f_; E1e4z: redirect("\141\165\x74\150"); goto skOiq; T_nQR: $this->load->library(["\x64\141\x74\141\x74\x61\142\x6c\145\163", "\146\x6f\x72\x6d\x5f\x76\141\154\x69\144\x61\164\x69\157\x6e"]); goto leQQr; dVLmq: jotkL: goto aZ1yT; DXN63: $this->load->dbforge(); goto T_nQR; LcyLc: } public function output_json($data, $encode = true) { goto iHVVF; MxdwY: $data = json_encode($data); goto G14Fb; G14Fb: gstM5: goto pO0R3; iHVVF: if (!$encode) { goto gstM5; } goto MxdwY; pO0R3: $this->output->set_content_type("\141\160\160\x6c\151\143\141\164\x69\x6f\156\57\152\x73\x6f\156")->set_output($data); goto iuDDz; iuDDz: } private function updateUrutanTampil() { goto PV0na; cSCvg: paoKL: goto Z2yI2; JYHlw: if (!(count($insert) > 0)) { goto paoKL; } goto OFuza; OFuza: $this->db->update_batch("\x6d\x61\163\x74\x65\162\x5f\155\x61\x70\x65\x6c", $insert); goto cSCvg; PV0na: $mapels = $this->db->select("\52")->from("\x6d\141\x73\164\145\x72\137\x6d\141\160\145\154")->get()->result(); goto anYo0; lk9qD: foreach ($mapels as $mapel) { $insert = ["\x69\x64\x5f\155\141\160\145\154" => $mapel->id_mapel, "\x6e\141\x6d\141\137\x6d\141\x70\x65\x6c" => $mapel->id_mapel, "\x6b\157\144\145" => $mapel->id_mapel, "\153\145\154\x6f\x6d\160\x6f\153" => $mapel->id_mapel, "\142\157\142\x6f\164\x5f\160" => $mapel->id_mapel, "\142\x6f\142\x6f\x74\x5f\153" => $mapel->id_mapel, "\x6a\145\156\152\141\156\x67" => $mapel->id_mapel, "\x75\x72\x75\x74\x61\x6e" => $mapel->id_mapel, "\165\162\x75\164\141\156\x5f\164\x61\x6d\x70\x69\154" => $mapel->id_mapel, "\x73\164\x61\164\165\163" => $mapel->id_mapel, "\144\145\154\145\x74\x61\x62\x6c\145" => $mapel->id_mapel]; B6woS: } goto clFs7; clFs7: Qi0FR: goto JYHlw; anYo0: $insert = []; goto lk9qD; Z2yI2: } public function index() { goto q8SJW; vUJS3: $setting = $this->dashboard->getSetting(); goto rx7cj; V181t: $this->load->view("\137\164\145\155\x70\154\141\x74\x65\163\57\x64\x61\163\150\142\x6f\x61\162\x64\x2f\x5f\150\145\x61\x64\145\x72", $data); goto NFA82; a2dhJ: $data["\163\165\142\137\x6b\x65\154\157\155\x70\157\x6b\137\x6d\x61\160\x65\x6c"] = $this->master->getDataSubKelompokMapel(); goto pP2xX; bQeCv: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto LxpOA; L0MaB: $data["\x6d\x61\x70\145\154\x5f\x6e\x6f\156\x5f\141\x6b\164\x69\x66"] = $this->master->getAllMapelNonAktif($setting->jenjang); goto V181t; rSEgG: $fields = array("\x75\162\x75\164\141\x6e\x5f\x74\x61\x6d\x70\x69\x6c" => array("\164\x79\x70\x65" => "\151\x6e\x74\50\63\51", "\x61\x66\164\x65\x72" => "\165\162\x75\x74\141\x6e")); goto tSdEc; oVBw2: RShsu: goto P50pc; q8SJW: if ($this->db->field_exists("\165\x72\x75\164\141\156\137\164\x61\155\160\x69\154", "\x6d\x61\163\x74\145\162\137\155\141\160\x65\154")) { goto RShsu; } goto rSEgG; P50pc: $user = $this->ion_auth->user()->row(); goto vUJS3; Pi0mw: $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\164\145\163\57\144\x61\x73\150\142\x6f\x61\x72\144\x2f\137\146\157\x6f\164\x65\162"); goto UtwiY; pP2xX: $data["\153\145\154\x6f\155\160\x6f\x6b"] = $this->dropdown->getDataKelompokMapel(); goto Gcwb2; LCd9z: $data["\x74\160"] = $this->dashboard->getTahun(); goto xWu_u; tSdEc: $this->dbforge->add_column("\155\x61\x73\x74\145\162\137\155\x61\x70\x65\154", $fields); goto oVBw2; Gcwb2: $data["\163\164\x61\164\x75\163"] = ["\x4e\157\156\141\x6b\x74\151\146", "\101\x6b\164\151\x66"]; goto L0MaB; xWu_u: $data["\164\160\x5f\x61\x63\x74\151\x76\145"] = $this->dashboard->getTahunActive(); goto bQeCv; NFA82: $this->load->view("\x6d\141\x73\x74\x65\162\x2f\155\141\x70\145\x6c\57\x64\141\x74\141"); goto Pi0mw; x2gME: $data["\x6b\145\154\157\155\160\x6f\153\137\155\141\160\x65\x6c"] = $this->master->getDataKelompokMapel(); goto a2dhJ; rx7cj: $data = ["\165\x73\x65\162" => $user, "\x6a\x75\x64\165\154" => "\115\x61\164\x61\40\x50\145\x6c\x61\x6a\141\162\x61\156", "\163\x75\142\x6a\x75\144\165\x6c" => "\x44\141\x66\x74\141\x72\x20\115\141\164\141\40\120\x65\154\141\x6a\x61\162\x61\x6e", "\160\x72\x6f\146\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\x67" => $setting]; goto LCd9z; LxpOA: $data["\x73\155\x74\137\x61\143\x74\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto gZpp1; gZpp1: $data["\x6b\x61\164\145\147\x6f\x72\x69"] = ["\127\101\x4a\x49\x42", "\120\x41\x49\40\50\x4b\145\x6d\x65\156\141\147\51", "\120\105\x4d\x49\116\101\124\x41\x4e\40\x41\x4b\101\104\x45\x4d\111\x4b", "\x41\113\101\104\x45\115\111\x4b\40\x4b\105\112\125\x52\x55\x41\x4e", "\x4c\111\x4e\124\101\x53\40\x4d\111\116\101\124", "\115\125\114\117\113"]; goto x2gME; UtwiY: } public function addKelompokMapel() { goto YtNaI; YtNaI: $id = $this->input->post("\151\x64\137\153\x65\154\137\155\141\x70\145\x6c"); goto OMRJU; mifQG: OyJr2: goto YlMQj; aKLox: goto m2htk; goto mifQG; YlMQj: $this->db->where("\151\144\137\153\145\x6c\x5f\x6d\141\x70\145\154", $id); goto Yl5ua; OMRJU: $insert = ["\x6e\141\155\x61\x5f\x6b\x65\154\x5f\x6d\x61\x70\x65\x6c" => $this->input->post("\x6e\x61\x6d\141\137\x6b\x65\x6c\137\155\141\160\145\154", true), "\153\157\x64\145\137\x6b\145\154\x5f\155\x61\160\x65\x6c" => $this->input->post("\x6b\157\144\x65\x5f\x6b\145\154\x5f\155\141\x70\145\154", true), "\153\141\164\x65\x67\157\x72\151" => $this->input->post("\153\x61\x74\x65\147\x6f\x72\x69", true), "\x69\144\x5f\x70\x61\x72\x65\156\x74" => $this->input->post("\151\144\x5f\160\x61\162\x65\x6e\x74", true)]; goto ebSR3; Q22gg: $this->output->set_content_type("\141\160\160\x6c\x69\143\x61\164\x69\157\x6e\57\x6a\x73\157\x6e")->set_output($data); goto KbQ0H; JBT0Q: m2htk: goto Q22gg; Yl5ua: $data = $this->db->update("\x6d\x61\163\x74\x65\162\137\x6b\145\154\x6f\x6d\160\157\x6b\137\x6d\x61\160\x65\154", $insert); goto JBT0Q; fyK92: $data = $this->master->create("\155\141\x73\x74\x65\162\x5f\x6b\145\154\x6f\155\x70\x6f\153\x5f\x6d\141\160\x65\x6c", $insert); goto aKLox; ebSR3: if ($id != null) { goto OyJr2; } goto fyK92; KbQ0H: } public function hapusKelompok() { goto rMT04; ffYCG: array_push($messages, "\x53\x75\x62\x20\x4b\145\x6c\157\155\160\157\x6b"); goto X8KJ6; VIqTT: S62eY: goto iC8J4; TiSJ_: if (!($nums > 0)) { goto Jwb9s; } goto ffYCG; uOwSN: $numm = $this->db->count_all_results("\x6d\141\x73\x74\145\x72\x5f\x6d\141\x70\145\154"); goto XEtdd; iSg8O: $id_parent = $this->input->post("\x69\144\x5f\x70\x61\x72\145\x6e\164"); goto R2_FF; mzS_p: array_push($messages, "\115\141\164\141\x20\x50\x65\x6c\141\x6a\141\162\141\x6e"); goto K8ALr; XEtdd: if (!($numm > 0)) { goto ail0L; } goto mzS_p; CEjKB: $this->db->where_in("\151\144\x5f\x70\x61\x72\145\156\x74", $id); goto kOZlw; qawPD: goto S62eY; goto lra3I; X8KJ6: Jwb9s: goto dsREk; R2_FF: $messages = []; goto aZPhg; dsREk: if (count($messages) > 0) { goto erG2c; } goto IxBZC; l30rH: $kode = $this->input->post("\x6b\x6f\144\x65"); goto iSg8O; rMT04: $id = $this->input->post("\x69\x64\x5f\153\145\154"); goto l30rH; kOZlw: $nums = $this->db->count_all_results("\x6d\141\x73\x74\145\x72\137\x6b\x65\x6c\157\155\160\157\153\x5f\155\141\x70\145\154"); goto TiSJ_; IxBZC: if (!$this->master->delete("\x6d\141\x73\164\x65\162\137\153\145\154\157\x6d\160\157\153\137\x6d\141\x70\145\x6c", $id, "\x69\144\x5f\153\145\x6c\137\x6d\141\160\145\x6c")) { goto TQt0y; } goto SF21d; aZPhg: $this->db->where_in("\x6b\145\154\157\x6d\160\x6f\153", $kode); goto uOwSN; X1hBI: TQt0y: goto qawPD; Z2co5: $this->output_json(["\163\164\x61\164\x75\163" => false, "\x6d\145\x73\163\x61\147\145" => "\x4b\145\154\x6f\155\160\x6f\x6b\40\x4d\141\160\x65\x6c\x20\144\x69\147\165\x6e\141\153\141\156\x20\x64\x69\x20" . count($messages) . "\40\x74\x61\x62\145\x6c\x3a\74\142\162\76" . implode("\74\x62\x72\76", $messages)]); goto VIqTT; K8ALr: ail0L: goto CEjKB; SF21d: $this->output_json(["\x73\x74\141\x74\165\163" => true, "\x6d\x65\x73\x73\x61\x67\145" => "\142\x65\x72\x68\x61\x73\151\x6c"]); goto X1hBI; lra3I: erG2c: goto Z2co5; iC8J4: } public function create() { goto TkzMS; TkzMS: $setting = $this->dashboard->getSetting(); goto H320X; H320X: $insert = ["\x6e\x61\x6d\141\137\155\x61\160\x65\154" => $this->input->post("\x6e\x61\155\x61\137\x6d\141\x70\145\x6c", true), "\153\x6f\144\145" => $this->input->post("\153\x6f\144\x65\137\x6d\x61\160\145\x6c", true), "\153\145\154\x6f\x6d\160\157\x6b" => $this->input->post("\x6b\x65\154\157\x6d\x70\157\x6b", true), "\165\x72\165\x74\141\156\x5f\x74\x61\x6d\x70\x69\154" => $this->input->post("\x75\x72\x75\x74\141\156\137\x74\x61\x6d\x70\151\x6c", true), "\x6a\x65\x6e\152\141\x6e\147" => $setting->jenjang]; goto q_lZr; RdWlP: $this->output->set_content_type("\141\160\x70\154\151\x63\x61\x74\x69\157\156\x2f\x6a\163\157\156")->set_output($data); goto bg8ZB; q_lZr: $data = $this->master->create("\155\141\x73\164\x65\x72\137\x6d\x61\160\x65\x6c", $insert); goto RdWlP; bg8ZB: } public function getDataKelompok() { goto kcWdy; pXZoc: echo $this->datatables->generate(); goto I4Pzm; kcWdy: $this->datatables->select("\52"); goto rFyX2; Mv3_o: $this->datatables->where("\x69\x64\137\160\x61\x72\145\156\164", "\60"); goto lSNqr; lSNqr: $this->db->order_by("\x6b\x6f\x64\x65\x5f\153\x65\154\x5f\155\x61\160\x65\x6c"); goto pXZoc; rFyX2: $this->datatables->from("\155\x61\163\164\x65\x72\137\x6b\x65\154\x6f\x6d\160\x6f\153\x5f\155\141\x70\x65\154"); goto Mv3_o; I4Pzm: } public function getDataSubKelompok() { goto o1qIr; o1qIr: $this->datatables->select("\x2a"); goto Ll8ft; dqDBm: echo $this->datatables->generate(); goto o8HiS; R7GTf: $this->datatables->where("\x69\144\x5f\x70\141\x72\145\156\x74\40\74\x3e\40\x30"); goto JhbcF; Ll8ft: $this->datatables->from("\155\x61\x73\x74\x65\162\x5f\153\x65\154\157\x6d\160\157\153\137\x6d\x61\160\x65\154"); goto R7GTf; JhbcF: $this->db->order_by("\153\157\x64\145\137\x6b\145\x6c\x5f\x6d\x61\x70\145\154"); goto dqDBm; o8HiS: } public function read() { goto d2Z_G; LLYsE: echo $this->datatables->generate(); goto DUFGw; a1s33: $this->datatables->from("\x6d\141\x73\164\x65\162\x5f\155\x61\160\x65\154"); goto usETT; d2Z_G: $setting = $this->dashboard->getSetting(); goto QErFZ; usETT: $this->db->order_by("\x6b\145\154\157\155\x70\157\x6b"); goto DYVdG; QErFZ: $this->datatables->select("\x69\x64\137\x6d\x61\160\145\x6c\x2c\x20\165\x72\x75\164\x61\x6e\x5f\x74\x61\155\160\151\x6c\54\x20\x6e\141\x6d\141\x5f\x6d\x61\x70\145\x6c\x2c\x20\153\x6f\144\x65\54\40\153\145\154\x6f\x6d\x70\157\153\54\40\144\145\x6c\x65\164\141\142\154\145\54\40\x73\x74\x61\164\x75\x73"); goto a1s33; DYVdG: $this->db->order_by("\x75\x72\165\164\x61\156\x5f\164\141\155\x70\151\154"); goto LLYsE; DUFGw: } public function update() { $data = $this->master->updateMapel(); $this->output->set_content_type("\141\160\160\154\x69\x63\141\x74\x69\x6f\156\x2f\152\x73\157\156")->set_output($data); } public function aktifkan($id) { goto FlBxL; CJbB5: $update = $this->db->update("\155\141\x73\164\x65\162\137\155\x61\x70\x65\154"); goto ws_BL; ws_BL: $this->output_json($update); goto G6KhW; FlBxL: $this->db->set("\163\164\x61\x74\x75\163", "\61"); goto Nk5hf; Nk5hf: $this->db->where("\x69\x64\137\155\141\160\145\154", $id); goto CJbB5; G6KhW: } public function delete() { goto t8Eah; p6nkK: $this->output_json(["\x73\164\x61\164\165\163" => true, "\164\157\x74\x61\154" => count($chk)]); goto J3_1q; eok1r: cyLUq: goto q6cQF; TB8Um: XOMMT: goto nOf2q; yXPnB: G7DNn: goto vwSvj; BanYp: dlsg9: goto OaJbP; WtpLh: foreach ($tabless as $table) { goto L_hIN; VAzxj: cunAF: goto VGbzN; iUyHj: foreach ($fields as $field) { goto vpIcr; FKyaU: p5m9z: goto ebOh8; GWDoh: lycUM: goto FKyaU; j86iZ: array_push($tables, $table); goto GWDoh; vpIcr: if (!($field->name == "\151\x64\137\155\141\x70\x65\x6c" || $field->name == "\155\141\160\145\154\137\x69\x64")) { goto lycUM; } goto j86iZ; ebOh8: } goto VAzxj; L_hIN: $fields = $this->db->field_data($table); goto iUyHj; VGbzN: wj9Q8: goto d4Ti7; d4Ti7: } goto UiC6J; nOf2q: goto dlsg9; goto AKZta; UiC6J: qai8n: goto ipngs; IxGfx: goto XOMMT; goto eok1r; vwSvj: if (count($messages) > 0) { goto cyLUq; } goto G02ju; ycyr3: $tables = []; goto QVoNx; q6cQF: $this->output_json(["\163\x74\x61\x74\x75\x73" => false, "\x74\x6f\164\141\154" => "\115\x61\160\145\x6c\40\144\x69\x67\165\x6e\141\x6b\141\156\40\x64\x69\x20" . count($messages) . "\40\164\141\x62\145\x6c\x3a\74\142\162\76" . implode("\x3c\x62\x72\76", $messages)]); goto TB8Um; QVoNx: $tabless = $this->db->list_tables(); goto WtpLh; G02ju: if (!$this->master->delete("\155\x61\163\164\145\162\x5f\155\x61\x70\145\154", $chk, "\x69\x64\x5f\155\141\x70\x65\x6c")) { goto mlo3M; } goto p6nkK; AKZta: Jx9Am: goto ZtFlO; ipngs: foreach ($tables as $table) { goto bkOtD; beO6J: if (!($num > 0)) { goto hj0GH; } goto c6Vft; MFOYV: $this->db->where_in("\x6d\x61\x70\x65\154\x5f\x69\x64", $chk); goto w0Qlo; bR5GS: if ($table == "\143\142\164\137\x73\157\x61\154") { goto CaefO; } goto mLuv6; bkOtD: if (!($table != "\x6d\x61\163\x74\145\x72\137\x6d\x61\x70\145\154")) { goto XVSPd; } goto bR5GS; c6Vft: array_push($messages, $table); goto eQLRs; mLuv6: $this->db->where_in("\151\x64\x5f\155\141\160\145\x6c", $chk); goto fhwAW; fhwAW: $num = $this->db->count_all_results($table); goto CN0wr; CN0wr: goto vinEH; goto c1GvS; taWjo: KpTqH: goto w0H4e; w0Qlo: $num = $this->db->count_all_results($table); goto jIBe4; U2DqE: XVSPd: goto taWjo; eQLRs: hj0GH: goto U2DqE; jIBe4: vinEH: goto beO6J; c1GvS: CaefO: goto MFOYV; w0H4e: } goto yXPnB; ZtFlO: $this->output_json(["\163\x74\x61\164\x75\x73" => false, "\x74\157\164\x61\154" => "\x54\x69\144\x61\x6b\x20\x61\144\141\40\144\141\x74\141\40\x79\x61\x6e\147\40\144\x69\x70\x69\x6c\151\x68\x21"]); goto BanYp; t8Eah: $chk = $this->input->post("\143\150\x65\143\153\145\144", true); goto P0bF1; P0bF1: if (!$chk) { goto Jx9Am; } goto QA1EK; J3_1q: mlo3M: goto IxGfx; QA1EK: $messages = []; goto ycyr3; OaJbP: } public function import($import_data = null) { goto gPcn8; lYzT2: $data["\164\160"] = $this->dashboard->getTahun(); goto W4VcY; HJeLf: $this->load->view("\137\x74\x65\155\160\x6c\x61\x74\145\163\x2f\144\x61\163\x68\142\x6f\141\162\144\57\137\146\x6f\x6f\x74\145\162"); goto L_ONx; TYKiI: rad8S: goto lYzT2; A_qZs: if (!($import_data != null)) { goto rad8S; } goto Oim8Y; Jn9cR: $data = ["\165\163\x65\162" => $user, "\152\x75\x64\x75\x6c" => "\115\141\x74\x61\40\120\x65\154\141\x6a\x61\162\141\x6e", "\163\165\142\x6a\x75\144\165\154" => "\111\x6d\160\x6f\162\x74\x20\x4d\141\164\x61\x20\120\145\x6c\x61\152\141\162\141\x6e", "\160\x72\x6f\146\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\156\x67" => $this->dashboard->getSetting()]; goto A_qZs; GT0mr: $this->load->view("\137\x74\x65\155\160\x6c\x61\x74\145\163\57\144\141\x73\x68\142\x6f\141\x72\144\x2f\137\x68\x65\141\x64\x65\162", $data); goto wf91r; Oim8Y: $data["\x69\155\x70\x6f\162\x74"] = $import_data; goto TYKiI; W4VcY: $data["\164\160\x5f\141\143\164\151\x76\145"] = $this->dashboard->getTahunActive(); goto b2xYS; IM7pR: $data["\x73\x6d\x74\137\x61\x63\164\151\166\x65"] = $this->dashboard->getSemesterActive(); goto GT0mr; b2xYS: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto IM7pR; wf91r: $this->load->view("\x6d\141\163\164\145\162\57\155\141\x70\145\x6c\57\151\155\x70\x6f\162\164"); goto HJeLf; gPcn8: $user = $this->ion_auth->user()->row(); goto Jn9cR; L_ONx: } public function previewExcel() { goto d_dVI; SWimM: echo json_encode($data); goto sXJPT; d_dVI: $config["\165\160\154\x6f\141\x64\x5f\x70\141\164\150"] = "\x2e\x2f\x75\160\x6c\157\x61\x64\x73\57\x69\x6d\160\157\162\x74\57"; goto d8cSf; Ona8h: $spreadsheet = $reader->load($file); goto OlU0v; PvzTW: $error = $this->upload->display_errors(); goto KnOCr; WpO3b: VgV78: goto Ona8h; ZUQ6n: wsCbN: goto PvzTW; KnOCr: echo $error; goto U_vMT; KqYRl: cVQaX: goto UraIX; zvDxm: $this->load->library("\x75\160\154\157\141\144", $config); goto zgaaZ; Jj16e: goto Tq2dp; goto oV2kE; mpAFC: cBYlJ: goto WpO3b; NSTRK: $i++; goto Jj16e; nfh_I: Exn_r: goto G44l4; U_vMT: die; goto KqYRl; Taufy: Tq2dp: goto xdWKg; d8cSf: $config["\x61\154\154\157\x77\145\144\137\x74\171\160\x65\x73"] = "\x78\154\x73\x7c\170\154\163\170\174\143\163\166"; goto yahuc; xdWKg: if (!($i < count($sheetData))) { goto M7NFB; } goto RjrWf; yahuc: $config["\x6d\141\170\x5f\163\151\172\x65"] = 2048; goto buUzP; RnZh4: $ext = $this->upload->data("\x66\151\x6c\145\x5f\x65\x78\164"); goto wYlKl; sXJPT: goto cVQaX; goto ZUQ6n; oV2kE: M7NFB: goto l6CSw; cpkV5: $data[] = ["\x6e\x61\x6d\x61" => $sheetData[$i][1], "\153\157\144\x65" => $sheetData[$i][2]]; goto nfh_I; iq0EQ: $i = 1; goto Taufy; di7Sx: $data = []; goto iq0EQ; l6CSw: unlink($file); goto SWimM; zgaaZ: if (!$this->upload->do_upload("\x75\160\x6c\x6f\141\x64\137\146\x69\x6c\x65")) { goto wsCbN; } goto sjyCn; RjrWf: if (!($sheetData[$i][1] != null)) { goto Exn_r; } goto cpkV5; OlU0v: $sheetData = $spreadsheet->getActiveSheet()->toArray(); goto di7Sx; G44l4: fPYHi: goto NSTRK; wYlKl: switch ($ext) { case "\x2e\x78\x6c\x73\x78": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); goto VgV78; case "\x2e\x78\x6c\163": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); goto VgV78; case "\56\143\x73\x76": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); goto VgV78; default: echo "\165\x6e\x6b\x6e\157\x77\x6e\40\146\x69\x6c\145\40\145\x78\x74"; die; } goto mpAFC; buUzP: $config["\145\x6e\x63\162\x79\x70\x74\137\x6e\x61\155\x65"] = true; goto zvDxm; sjyCn: $file = $this->upload->data("\146\x75\154\x6c\137\x70\x61\x74\x68"); goto RnZh4; UraIX: } public function previewWord() { goto Jy2K3; IkUm5: $dom = new DOMDocument(); goto GG0d6; GG0d6: $dom->loadHTML($text); goto Eb8OU; ObGqV: $data[] = ["\156\141\155\x61" => $cols->item(1)->nodeValue, "\x6b\157\x64\145" => $cols->item(2)->nodeValue]; goto th2cM; d2CA0: echo $error; goto Gpryo; dszWw: goto UFmB9; goto Mhu1C; Knkm2: $dom->preserveWhiteSpace = false; goto xueTt; LARaD: $i++; goto kIAJO; xueTt: $tables = $dom->getElementsByTagName("\164\141\142\x6c\145"); goto Q2k3M; VEv0V: $error = $this->upload->display_errors(); goto d2CA0; kQf2X: $text = file_get_contents("\56\x2f\165\160\154\157\141\x64\x73\57\164\x65\x6d\x70\x2f\144\157\143\56\150\164\155\x6c"); goto IkUm5; V7YAg: UFmB9: goto UZZb7; cuUzF: $cols = $rows[$i]->getElementsByTagName("\x74\x64"); goto ObGqV; VgKBC: $phpWord = \PhpOffice\PhpWord\IOFactory::load($file); goto OmE1X; bJ0rw: TxrYZ: goto tqBJI; tG2ye: $this->load->library("\165\x70\154\157\141\144", $config); goto fw3Ug; lRv3m: unlink($file); goto kQf2X; OmE1X: $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord); goto CBKY0; PO6RJ: $config["\x65\x6e\x63\162\x79\x70\x74\x5f\x6e\141\155\145"] = true; goto tG2ye; CBKY0: try { $htmlWriter->save("\56\57\165\x70\x6c\157\x61\144\163\x2f\164\x65\x6d\x70\57\x64\157\x63\56\150\x74\155\154"); } catch (\PhpOffice\PhpWord\Exception\Exception $e) { } goto lRv3m; fw3Ug: if (!$this->upload->do_upload("\x75\x70\x6c\157\141\x64\137\x66\151\154\145")) { goto hBlIl; } goto ILAYH; Mhu1C: hBlIl: goto VEv0V; Eb8OU: $data = []; goto Knkm2; Q2k3M: $rows = $tables->item(0)->getElementsByTagName("\164\x72"); goto aCUcO; eAheC: echo json_encode($data); goto dszWw; aCUcO: $i = 1; goto bJ0rw; GjqK_: LikkT: goto eAheC; ILAYH: $file = $this->upload->data("\146\x75\154\x6c\137\160\x61\x74\150"); goto VgKBC; th2cM: tBWnr: goto LARaD; ZONyZ: $config["\x6d\141\x78\x5f\x73\x69\172\x65"] = 2048; goto PO6RJ; Gpryo: die; goto V7YAg; Jy2K3: $config["\165\160\x6c\157\x61\144\137\x70\x61\x74\x68"] = "\x2e\x2f\165\x70\x6c\x6f\x61\x64\x73\57\x69\x6d\x70\157\162\164\57"; goto aOdFC; aOdFC: $config["\x61\x6c\154\157\167\145\x64\x5f\x74\x79\x70\145\163"] = "\144\157\x63\x78"; goto ZONyZ; tqBJI: if (!($i < $rows->count())) { goto LikkT; } goto cuUzF; kIAJO: goto TxrYZ; goto GjqK_; UZZb7: } public function do_import() { goto L0_0V; iMBOw: $mapel = []; goto HI1jU; KRyGY: $this->output->set_content_type("\141\160\160\x6c\151\x63\141\x74\x69\x6f\x6e\57\152\163\157\156")->set_output($save); goto GgUFe; L0_0V: $data = json_decode($this->input->post("\x6d\141\x70\145\x6c", true)); goto iMBOw; okq5o: $save = $this->master->create("\x6d\x61\x73\x74\x65\162\x5f\x6d\x61\160\x65\x6c", $mapel, true); goto KRyGY; A0nFW: qWE5u: goto okq5o; HI1jU: foreach ($data as $j) { $mapel[] = ["\x6e\141\x6d\x61\137\155\x61\x70\145\154" => $j->nama, "\153\157\144\x65" => $j->kode]; XGgmD: } goto A0nFW; GgUFe: } }
