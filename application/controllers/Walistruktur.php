<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walistruktur extends CI_Controller { public function __construct() { goto KXCOR; JlQgs: GOvtp: goto p304a; HGbMf: $this->load->model("\113\145\x6c\141\x73\x5f\x6d\x6f\x64\145\154", "\x6b\x65\154\x61\x73"); goto EqhNW; Xm8_v: if (!$this->ion_auth->logged_in()) { goto GOvtp; } goto j4yBZ; j4yBZ: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) { goto nDvoR; } goto h6Jfp; dg69G: nDvoR: goto HEz09; KXCOR: parent::__construct(); goto Xm8_v; EqhNW: $this->load->model("\104\162\x6f\160\x64\157\167\x6e\x5f\x6d\x6f\144\145\154", "\144\162\x6f\x70\x64\x6f\x77\x6e"); goto KE3j5; LdRxt: $this->load->model("\115\x61\163\x74\x65\x72\137\155\x6f\x64\x65\154", "\x6d\141\163\x74\x65\162"); goto PyvOD; HEz09: goto ArhdS; goto JlQgs; p304a: redirect("\141\165\x74\x68"); goto xfx4i; PyvOD: $this->load->model("\x44\141\163\x68\142\x6f\x61\162\144\x5f\x6d\157\x64\145\x6c", "\x64\141\163\x68\142\157\x61\x72\144"); goto HGbMf; xfx4i: ArhdS: goto zQZ6Z; zQZ6Z: $this->load->library(["\144\141\x74\x61\164\x61\x62\x6c\x65\x73", "\x66\x6f\x72\155\137\166\141\x6c\x69\x64\141\164\151\x6f\156"]); goto LdRxt; KE3j5: $this->form_validation->set_error_delimiters('', ''); goto khpi7; h6Jfp: show_error("\x48\141\156\171\141\40\101\x64\155\x69\156\151\163\x74\162\x61\164\x6f\x72\40\144\x61\x6e\40\147\165\x72\x75\x20\171\141\x6e\147\40\144\151\142\x65\x72\151\x20\150\x61\153\x20\165\156\x74\165\x6b\x20\x6d\145\x6e\147\141\x6b\x73\145\163\x20\x68\x61\154\x61\x6d\x61\x6e\40\x69\156\151\54\40\74\x61\x20\150\x72\x65\146\75\x22" . base_url("\x64\x61\x73\x68\142\x6f\141\162\x64") . "\x22\x3e\113\x65\155\x62\141\x6c\x69\x20\153\x65\x20\x6d\x65\156\x75\x20\x61\167\141\154\x3c\57\141\76", 403, "\101\x6b\163\x65\163\x20\x54\145\162\154\141\x72\141\x6e\147"); goto dg69G; khpi7: } public function output_json($data, $encode = true) { goto sxNj7; dlpVM: $data = json_encode($data); goto lUOV6; sxNj7: if (!$encode) { goto b5kkn; } goto dlpVM; KdeQS: $this->output->set_content_type("\x61\160\160\154\x69\x63\141\164\x69\157\156\57\152\x73\157\x6e")->set_output($data); goto v2Ncy; lUOV6: b5kkn: goto KdeQS; v2Ncy: } public function index() { goto lYwBt; npeAO: $this->load->view("\155\x65\155\142\145\x72\x73\57\x67\x75\162\x75\57\x77\141\154\x69\x2f\163\164\162\x75\x6b\x74\165\x72"); goto cLrq6; gt4mG: $data["\x73\x69\x73\x77\x61\163"] = $siswas; goto qQnt8; O7QXl: $struktur = $this->kelas->getStrukturKelas($guru->wali_kelas); goto ALySq; qQnt8: $data["\x69\x64\137\153\145\154\x61\x73"] = $guru->wali_kelas; goto ItRlE; j0Ad7: $siswas[''] = "\120\x69\154\x69\x68\x20\x53\x69\163\167\x61"; goto FNJYL; tktrF: $tp = $this->master->getTahunActive(); goto PGvfo; lYwBt: $user = $this->ion_auth->user()->row(); goto NNz6Z; ALySq: if ($struktur == null) { goto ad1CP; } goto nVHXJ; ItRlE: $this->load->view("\155\145\155\142\x65\x72\x73\57\147\x75\162\x75\57\164\145\x6d\x70\154\141\x74\145\163\x2f\150\x65\141\x64\145\162", $data); goto npeAO; Et7gj: $data["\x67\165\x72\x75\x73"] = $this->dropdown->getAllGuru(); goto Kha8L; PGvfo: $smt = $this->master->getSemesterActive(); goto ER_1E; LOg7j: ad1CP: goto XIbeW; cLrq6: $this->load->view("\155\x65\155\142\145\162\x73\x2f\x67\x75\162\x75\57\164\x65\155\160\x6c\141\x74\145\163\57\x66\x6f\x6f\x74\145\162"); goto HKOaL; FltWp: goto HVeo9; goto LOg7j; BrVOz: $data["\x73\155\x74\137\141\143\x74\x69\x76\145"] = $smt; goto AbW1n; N4m6C: HVeo9: goto UqyiY; aHgIX: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto BrVOz; NNz6Z: $data = ["\x75\163\145\162" => $user, "\152\165\144\165\154" => "\123\164\162\165\x6b\164\165\x72\x20\x4f\x72\147\141\156\151\x73\141\x73\151", "\163\x75\142\x6a\x75\x64\165\154" => "\123\164\x72\165\153\x74\165\162\x20\117\x72\147\x61\x6e\x69\163\141\x73\151", "\x73\145\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto tktrF; bQLdY: lWK1P: goto gt4mG; ER_1E: $data["\x74\x70"] = $this->dashboard->getTahun(); goto o1ueF; FNJYL: foreach ($siswa as $key => $value) { $siswas[$value->id_siswa] = $value->nama; IbNt_: } goto bQLdY; XIbeW: $data["\x73\164\x72\x75\153\x74\x75\x72"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto N4m6C; nVHXJ: $data["\163\x74\x72\x75\x6b\x74\165\162"] = $struktur; goto FltWp; AbW1n: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto O7QXl; UqyiY: $data["\x67\165\162\x75"] = $guru; goto Et7gj; Kha8L: $siswa = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto j0Ad7; o1ueF: $data["\164\x70\137\141\143\x74\151\x76\145"] = $tp; goto aHgIX; HKOaL: } public function save() { goto wOcfc; xxa6s: $this->output_json($insert); goto RLf88; wOcfc: $data = ["\x69\x64\137\x6b\x65\x6c\141\163" => $this->input->post("\x69\x64\x5f\153\x65\x6c\x61\x73"), "\153\145\164\x75\141" => $this->input->post("\153\x65\164\x75\141"), "\x77\141\x6b\151\154\137\153\145\x74\165\141" => $this->input->post("\167\x61\153\x69\x6c\137\x6b\145\x74\165\x61"), "\x73\x65\153\162\x65\164\141\162\x69\x73\137\x31" => $this->input->post("\x73\x65\153\x72\145\x74\x61\162\151\163\137\x31"), "\x73\x65\x6b\162\x65\164\141\162\151\x73\x5f\x32" => $this->input->post("\163\145\x6b\162\145\164\x61\162\x69\x73\137\x32"), "\x62\x65\156\144\x61\x68\x61\x72\x61\x5f\61" => $this->input->post("\142\x65\x6e\x64\141\x68\141\162\141\x5f\61"), "\142\x65\x6e\x64\141\150\141\x72\141\137\62" => $this->input->post("\142\x65\x6e\x64\141\150\141\162\x61\137\x32"), "\163\151\x65\x5f\x65\153\163\164\162\x61\x6b\165\162\151\x6b\x75\154\x65\x72" => $this->input->post("\x73\151\x65\x5f\145\x6b\x73\x74\x72\141\x6b\x75\x72\151\153\165\x6c\145\162"), "\163\x69\x65\x5f\165\x70\141\x63\x61\162\x61" => $this->input->post("\x73\151\x65\x5f\x75\160\x61\x63\x61\x72\x61"), "\x73\x69\x65\x5f\157\154\x61\x68\x72\141\147\x61" => $this->input->post("\x73\x69\x65\x5f\x6f\154\x61\x68\162\x61\147\141"), "\x73\x69\x65\x5f\153\145\141\147\x61\155\141\x61\156" => $this->input->post("\163\151\145\x5f\153\145\x61\x67\141\155\141\141\156"), "\163\151\x65\137\x6b\145\x61\x6d\141\156\x61\156" => $this->input->post("\163\x69\x65\137\153\x65\x61\x6d\141\156\x61\156"), "\x73\x69\145\x5f\x6b\x65\164\x65\x72\x74\x69\x62\x61\156" => $this->input->post("\163\151\x65\x5f\153\x65\164\145\162\164\x69\x62\141\x6e"), "\163\151\145\137\153\x65\142\x65\x72\x73\151\150\141\x6e" => $this->input->post("\163\x69\145\137\x6b\x65\142\x65\x72\163\x69\x68\x61\156"), "\x73\x69\145\137\153\145\x69\x6e\144\141\x68\x61\156" => $this->input->post("\163\x69\145\x5f\x6b\x65\151\x6e\x64\141\x68\141\x6e"), "\163\151\145\137\x6b\x65\x73\145\150\141\x74\141\x6e" => $this->input->post("\163\x69\145\x5f\x6b\x65\x73\x65\150\141\x74\x61\x6e"), "\x73\x69\x65\137\153\x65\153\x65\x6c\x75\x61\x72\147\141\141\x6e" => $this->input->post("\163\151\x65\137\x6b\145\x6b\145\x6c\x75\141\x72\147\141\x61\x6e"), "\163\151\x65\x5f\150\165\155\141\x73" => $this->input->post("\x73\151\145\x5f\x68\x75\155\141\163")]; goto OMyKW; OMyKW: $insert = $this->db->replace("\153\145\x6c\141\x73\x5f\x73\164\x72\x75\x6b\x74\x75\x72", $data); goto xxa6s; RLf88: } }
