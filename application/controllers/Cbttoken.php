<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbttoken extends CI_Controller { public function __construct() { goto L6COa; pOO1O: redirect("\141\x75\x74\150"); goto Vfjma; TWHjw: wZKF9: goto nqjb1; Vfjma: rPozW: goto rsy_F; nqjb1: goto rPozW; goto qliQe; qliQe: n8p9k: goto pOO1O; WSAg0: show_error("\x48\x61\156\171\141\40\101\x64\155\x69\x6e\x69\x73\x74\x72\141\x74\x6f\162\x20\x79\141\x6e\147\x20\x64\x69\142\x65\162\x69\x20\150\x61\153\x20\165\x6e\x74\165\153\x20\x6d\x65\x6e\x67\141\153\x73\145\x73\x20\150\x61\x6c\x61\x6d\x61\156\x20\151\156\151\x2c\x20\x3c\x61\x20\150\162\145\146\75\42" . base_url("\144\141\x73\150\142\x6f\x61\162\x64") . "\x22\76\113\145\x6d\x62\x61\x6c\151\40\153\145\x20\155\145\x6e\165\x20\x61\x77\x61\154\74\57\x61\76", 403, "\x41\x6b\x73\x65\163\40\124\145\162\x6c\141\x72\x61\156\x67"); goto TWHjw; Sq2wC: $this->load->model("\103\142\164\137\x6d\x6f\144\145\154", "\143\142\x74"); goto t1U_O; WdU_9: $this->load->model("\x44\x61\163\x68\x62\x6f\x61\162\x64\x5f\x6d\157\144\x65\154", "\x64\x61\163\150\142\157\141\x72\144"); goto Sq2wC; rsy_F: $this->load->library(["\144\x61\164\x61\x74\141\142\x6c\x65\x73", "\x66\157\162\x6d\137\x76\141\154\151\x64\141\164\151\x6f\x6e"]); goto WMx2H; L2_iu: $this->form_validation->set_error_delimiters('', ''); goto uZZth; wCDZ_: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\165"))) { goto wZKF9; } goto WSAg0; L6COa: parent::__construct(); goto L1LxZ; WMx2H: $this->load->model("\x4d\141\x73\164\145\x72\x5f\x6d\157\x64\x65\x6c", "\155\141\x73\x74\145\162"); goto WdU_9; L1LxZ: if (!$this->ion_auth->logged_in()) { goto n8p9k; } goto wCDZ_; t1U_O: $this->load->model("\114\157\x67\x5f\155\157\144\145\x6c", "\154\157\147\147\x69\x6e\x67"); goto L2_iu; uZZth: } public function output_json($data, $encode = true) { goto gT_3q; sKNg7: IMURx: goto ersAa; ersAa: $this->output->set_content_type("\141\x70\x70\154\151\x63\x61\164\x69\157\x6e\57\152\163\157\156")->set_output($data); goto G25EZ; gT_3q: if (!$encode) { goto IMURx; } goto lXqxf; lXqxf: $data = json_encode($data); goto sKNg7; G25EZ: } public function index() { goto J9fxg; kk_DY: $data["\x74\160\x5f\x61\143\164\151\x76\145"] = $tp; goto ytkZO; dJgYi: $data["\164\160"] = $this->dashboard->getTahun(); goto kk_DY; jjsPy: goto W1khc; goto sqEOq; tuTA6: $data = ["\x75\163\145\162" => $user, "\152\165\x64\x75\x6c" => "\x54\157\153\x65\x6e\x20\x55\152\x69\141\156", "\x73\x75\142\152\165\x64\x75\154" => "\124\x6f\153\145\156", "\163\145\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto B67Lf; TN0D_: $data["\160\x72\157\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto BY7Nq; tM5Bx: $data["\164\x6f\x6b\145\x6e"] = $this->cbt->getToken(); goto ulGBW; BY7Nq: $this->load->view("\137\164\x65\155\160\x6c\141\x74\145\163\57\144\x61\x73\x68\142\157\141\162\144\x2f\137\x68\x65\x61\x64\145\x72", $data); goto LX4ba; ytkZO: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto fMWnH; f1YLE: $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\x65\163\57\x64\x61\163\150\142\157\x61\x72\x64\x2f\137\x66\157\157\164\x65\162"); goto sWVR5; J9fxg: $user = $this->ion_auth->user()->row(); goto tuTA6; fDcU8: $smt = $this->master->getSemesterActive(); goto dJgYi; HwE8X: $this->load->view("\x6d\x65\155\x62\145\162\x73\x2f\x67\165\162\x75\x2f\x63\142\164\57\x74\x6f\x6b\x65\156\x2f\x64\x61\x74\x61"); goto JDPjg; uYYaM: $this->load->view("\x6d\145\x6d\142\x65\x72\163\57\x67\x75\162\x75\57\x74\145\155\160\x6c\x61\x74\145\163\x2f\150\145\141\144\x65\x72", $data); goto HwE8X; fMWnH: $data["\x73\155\164\137\141\x63\x74\151\166\x65"] = $smt; goto tM5Bx; j2awG: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto GNaLh; sWVR5: W1khc: goto j7SlO; JDPjg: $this->load->view("\x6d\145\155\x62\145\162\163\57\147\x75\162\165\x2f\x74\145\x6d\160\x6c\141\164\145\163\x2f\x66\157\157\x74\145\x72"); goto jjsPy; GNaLh: $data["\147\x75\162\x75"] = $guru; goto uYYaM; ulGBW: if ($this->ion_auth->is_admin()) { goto TK91u; } goto j2awG; LX4ba: $this->load->view("\x63\142\164\57\164\x6f\153\145\x6e\57\x64\x61\x74\x61"); goto f1YLE; sqEOq: TK91u: goto TN0D_; B67Lf: $tp = $this->master->getTahunActive(); goto fDcU8; j7SlO: } public function generateToken() { goto iF85i; Otz1J: $this->output_json($token); goto EZX4H; iF85i: $post_token = json_decode($this->input->get("\144\141\164\x61")); goto ObtiH; RzTRY: $token = $this->cbt->getToken(); goto Otz1J; ObtiH: $this->cbt->saveToken($post_token); goto RzTRY; EZX4H: } public function autoToken($token, $auto) { $this->output_json($this->cbt->updateToken($token, $auto)); } public function loadToken() { goto kHcyV; c0JAN: goto fSlDy; goto P2s6W; NuNSc: $data["\x74\x6f\153\x65\156"] = ''; goto fQHdv; mUe86: fSlDy: goto hqrKE; P2s6W: Qx1Mv: goto NuNSc; Del3k: $this->output_json($data); goto mUe86; fQHdv: $data["\x61\165\164\x6f"] = "\x31"; goto Del3k; Zl2MV: if ($token == null) { goto Qx1Mv; } goto QTLqf; kHcyV: $token = $this->cbt->getToken(); goto Zl2MV; QTLqf: $this->output_json($token); goto c0JAN; hqrKE: } }
