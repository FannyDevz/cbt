<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\x53\x45\x50\x41\x54\x48") or exit("\116\x6f\x20\144\151\x72\145\143\x74\40\163\x63\x72\151\160\164\40\141\x63\x63\x65\163\x73\x20\x61\154\154\157\167\x65\x64"); class Users extends CI_Controller { public function __construct() { goto TVukx; aS8Xb: $this->load->model("\x44\141\163\150\x62\x6f\141\162\144\137\x6d\x6f\144\x65\x6c", "\141\x64\x6d\x69\156\x64\141\163\x68\142\157\141\162\144"); goto xgxYY; xgxYY: $this->form_validation->set_error_delimiters('', ''); goto q2LpO; Hubeb: $this->load->library(["\x64\141\x74\141\164\x61\142\x6c\x65\163", "\146\x6f\162\x6d\137\x76\141\154\151\x64\x61\x74\x69\x6f\x6e"]); goto PdJPB; C9HDj: redirect("\141\165\164\150"); goto nM4xN; tZlxf: $this->load->model("\x4d\x61\163\164\x65\x72\137\155\157\x64\x65\154", "\155\x61\x73\x74\145\x72"); goto aS8Xb; PdJPB: $this->load->model("\x55\x73\145\x72\x73\137\155\157\x64\x65\154", "\x75\163\x65\x72\x73"); goto tZlxf; TVukx: parent::__construct(); goto bgQw0; bgQw0: if ($this->ion_auth->logged_in()) { goto TwbvQ; } goto C9HDj; nM4xN: TwbvQ: goto Hubeb; q2LpO: } public function is_admin() { goto ugtlL; yO5Eb: B7Zyw: goto SIQlk; DvfFe: show_error("\x48\141\156\x79\x61\x20\x41\144\155\151\156\151\163\164\x72\141\164\x6f\162\x20\171\141\x6e\147\40\x64\x69\142\145\162\x69\40\150\x61\x6b\x20\165\156\164\165\153\x20\155\x65\156\147\141\x6b\x73\x65\x73\40\150\x61\x6c\141\155\141\156\x20\x69\x6e\x69\54\40\74\141\40\150\x72\145\146\75\42" . base_url("\x64\141\163\x68\x62\157\x61\x72\x64") . "\42\x3e\113\145\155\x62\x61\x6c\x69\40\153\x65\x20\155\145\x6e\165\40\141\x77\x61\x6c\74\x2f\141\x3e", 403, "\101\153\x73\x65\163\40\124\x65\162\154\x61\162\141\156\147"); goto yO5Eb; ugtlL: if ($this->ion_auth->is_admin()) { goto B7Zyw; } goto DvfFe; SIQlk: } public function output_json($data, $encode = true) { goto FlmHf; fwYbk: $data = json_encode($data); goto TJ_Sj; tSyKV: $this->output->set_content_type("\141\x70\x70\x6c\151\143\141\x74\x69\x6f\x6e\x2f\152\163\x6f\x6e")->set_output($data); goto pIEQb; FlmHf: if (!$encode) { goto EoUnJ; } goto fwYbk; TJ_Sj: EoUnJ: goto tSyKV; pIEQb: } public function data($id = null) { $this->is_admin(); $this->output_json($this->users->getDataUsers($id), false); } public function index() { goto njaXb; WWzvC: $this->load->view("\137\164\x65\x6d\x70\x6c\141\x74\145\163\57\144\141\163\150\x62\157\x61\162\144\x2f\x66\157\157\x74\145\162\56\160\x68\x70"); goto cAX2V; f5wpS: $this->load->view("\x75\x73\x65\162\x73\57\144\141\x74\x61"); goto WWzvC; ERQwT: $data["\163\155\164"] = $this->admindashboard->getSemester(); goto eAoQa; B2K_q: $data["\164\x70\x5f\141\x63\164\151\x76\145"] = $this->admindashboard->getTahunActive(); goto ERQwT; njaXb: $this->is_admin(); goto bZzH4; bZzH4: $data = ["\165\163\145\x72" => $this->ion_auth->user()->row(), "\152\x75\x64\x75\x6c" => "\125\163\145\162\x20\x4d\141\x6e\x61\x67\145\x6d\145\156\x74", "\x73\165\x62\152\x75\x64\x75\x6c" => "\104\x61\x74\x61\x20\x55\163\x65\x72"]; goto ZWDtn; IJJWi: $this->load->view("\x5f\x74\145\155\160\154\x61\164\145\x73\57\144\x61\163\150\142\x6f\x61\x72\144\57\x68\x65\x61\144\x65\162\x2e\160\150\x70", $data); goto f5wpS; eAoQa: $data["\163\x6d\164\x5f\141\x63\164\x69\x76\145"] = $this->admindashboard->getSemesterActive(); goto IJJWi; ZWDtn: $data["\164\160"] = $this->admindashboard->getTahun(); goto B2K_q; cAX2V: } public function edit($id) { goto RVSFq; vtpeW: $data = ["\165\x73\145\162" => $this->ion_auth->user()->row(), "\152\165\144\x75\x6c" => "\125\x73\145\162\x20\x4d\141\156\x61\147\x65\x6d\145\156\x74", "\163\165\x62\x6a\x75\x64\x75\154" => "\x45\x64\151\164\40\104\x61\x74\141\x20\x55\x73\145\162", "\165\x73\x65\162\163" => $this->ion_auth->user($id)->row(), "\x67\162\x6f\165\x70\163" => $this->ion_auth->groups()->result(), "\154\x65\166\145\154" => $level[0]]; goto J1EAk; J1EAk: $this->load->view("\x5f\164\x65\x6d\x70\154\141\x74\145\163\57\x64\141\x73\150\x62\157\x61\x72\x64\57\150\145\141\x64\x65\x72\x2e\x70\x68\160", $data); goto gzzRK; gzzRK: $this->load->view("\x75\163\x65\162\x73\x2f\145\144\x69\x74"); goto LFlhI; LFlhI: $this->load->view("\137\x74\145\155\160\154\x61\164\x65\x73\x2f\144\x61\163\150\x62\157\141\x72\x64\57\x66\x6f\157\164\145\x72\56\160\x68\x70"); goto ebXeD; RVSFq: $level = $this->ion_auth->get_users_groups($id)->result(); goto vtpeW; ebXeD: } public function edit_info() { goto O8wdN; XQ76Q: lC1vt: goto OMtqJ; XGWSK: if ($this->form_validation->run() === FALSE) { goto lC1vt; } goto aJzzg; aJzzg: $id = $this->input->post("\151\144", true); goto ijQ4y; onTIY: $this->output_json($data); goto CvjUk; hPi9p: $data["\163\x74\x61\x74\165\163"] = $update ? true : false; goto NeIqV; OMtqJ: $data["\x73\164\x61\164\165\163"] = false; goto kGHLM; kGHLM: $data["\x65\162\x72\157\162\x73"] = ["\x75\x73\x65\x72\156\141\x6d\x65" => form_error("\x75\163\x65\162\x6e\141\x6d\x65"), "\x66\151\x72\163\164\137\156\x61\x6d\145" => form_error("\146\151\162\163\x74\x5f\156\141\155\145"), "\x6c\x61\163\x74\x5f\156\141\x6d\145" => form_error("\x6c\141\163\164\x5f\x6e\x61\x6d\x65"), "\145\x6d\x61\x69\154" => form_error("\145\155\141\x69\x6c")]; goto gOLW6; tO5AV: $update = $this->master->update("\165\x73\145\162\x73", $input, "\151\144", $id); goto hPi9p; NeIqV: goto tNxHd; goto XQ76Q; Ay7XR: $this->form_validation->set_rules("\x66\x69\162\x73\x74\137\x6e\141\x6d\145", "\x46\151\x72\x73\164\x20\116\141\x6d\145", "\162\145\161\x75\151\162\145\x64"); goto WVpra; ijQ4y: $input = ["\x75\x73\x65\162\156\x61\155\145" => $this->input->post("\165\x73\x65\x72\156\x61\x6d\x65", true), "\146\x69\x72\163\x74\x5f\x6e\x61\155\x65" => $this->input->post("\x66\151\162\x73\164\x5f\x6e\x61\155\x65", true), "\x6c\x61\163\164\x5f\156\141\155\145" => $this->input->post("\x6c\x61\x73\x74\137\x6e\x61\x6d\x65", true), "\x65\155\x61\151\154" => $this->input->post("\145\155\x61\x69\x6c", true)]; goto tO5AV; gOLW6: tNxHd: goto onTIY; HFKai: $this->form_validation->set_rules("\x65\x6d\141\x69\154", "\x45\x6d\x61\151\154", "\162\145\x71\165\x69\162\x65\144\x7c\x76\141\154\151\144\137\145\155\141\x69\154"); goto XGWSK; oqXJ7: $this->form_validation->set_rules("\165\163\145\162\x6e\141\155\x65", "\125\163\145\162\x6e\141\155\145", "\x72\x65\161\x75\151\x72\145\x64"); goto Ay7XR; WVpra: $this->form_validation->set_rules("\x6c\141\163\164\137\x6e\141\155\x65", "\x4c\x61\x73\x74\40\116\x61\155\x65", "\x72\145\161\x75\x69\x72\145\x64"); goto HFKai; O8wdN: $this->is_admin(); goto oqXJ7; CvjUk: } public function edit_status() { goto E3O2J; qdqGK: $data["\163\164\141\164\x75\x73"] = $update ? true : false; goto u6sRJ; IbqiK: $data["\x65\x72\162\157\x72\163"] = ["\x73\x74\x61\164\x75\163" => form_error("\x73\164\x61\x74\x75\x73")]; goto Ymhdr; u6sRJ: goto Ip1Ds; goto OrAtQ; Ymhdr: Ip1Ds: goto s2TpQ; s2TpQ: $this->output_json($data); goto tsI0V; uPOKs: $update = $this->master->update("\165\x73\x65\162\x73", $input, "\151\x64", $id); goto qdqGK; Fa8T9: $this->form_validation->set_rules("\x73\x74\x61\x74\165\163", "\123\x74\141\x74\165\x73", "\x72\145\161\x75\151\x72\145\144"); goto Wrr3m; JmsNH: $input = ["\141\x63\164\x69\x76\x65" => $this->input->post("\163\x74\x61\164\165\x73", true)]; goto uPOKs; E3O2J: $this->is_admin(); goto Fa8T9; Wrr3m: if ($this->form_validation->run() === FALSE) { goto JyfDk; } goto MFeHX; MFeHX: $id = $this->input->post("\151\x64", true); goto JmsNH; m6fs_: $data["\x73\x74\x61\x74\165\x73"] = false; goto IbqiK; OrAtQ: JyfDk: goto m6fs_; tsI0V: } public function edit_level() { goto ahs_a; bQ92H: $input = ["\x67\x72\157\x75\160\137\x69\x64" => $this->input->post("\x6c\x65\166\x65\154", true)]; goto YsSsu; KAmgo: $this->output_json($data); goto wVazF; dt0Cq: $data["\163\x74\141\x74\165\x73"] = $update ? true : false; goto b0qip; azmvo: if ($this->form_validation->run() === FALSE) { goto noboh; } goto fqmfy; ahs_a: $this->is_admin(); goto oJvh1; oJvh1: $this->form_validation->set_rules("\154\x65\166\145\154", "\x4c\145\166\145\154", "\x72\x65\161\x75\151\162\x65\x64"); goto azmvo; iwD6E: SLO_6: goto KAmgo; b0qip: goto SLO_6; goto H95bK; As7gN: $data["\145\162\162\157\162\163"] = ["\x6c\145\x76\145\x6c" => form_error("\x6c\145\166\145\154")]; goto iwD6E; uC1XR: $data["\163\164\x61\164\165\x73"] = false; goto As7gN; H95bK: noboh: goto uC1XR; YsSsu: $update = $this->master->update("\x75\x73\x65\x72\x73\137\147\x72\157\x75\160\163", $input, "\165\163\145\x72\x5f\151\144", $id); goto dt0Cq; fqmfy: $id = $this->input->post("\151\x64", true); goto bQ92H; wVazF: } public function change_password() { goto RSF5D; NJ2Pd: qwSU8: goto JxI41; QkYUZ: dOxlo: goto Ipy_r; ZAFRv: if ($change) { goto dOxlo; } goto A6qtG; Ipy_r: $data["\163\164\x61\x74\165\163"] = true; goto r4Eeo; wFC7m: goto BtTrM; goto QkYUZ; RSF5D: $this->form_validation->set_rules("\157\x6c\x64", $this->lang->line("\143\150\141\x6e\x67\145\x5f\x70\141\x73\163\x77\x6f\x72\x64\x5f\x76\x61\154\x69\144\x61\164\151\157\x6e\137\157\x6c\x64\x5f\x70\x61\x73\x73\x77\x6f\x72\144\x5f\x6c\141\142\145\154"), "\162\x65\x71\x75\x69\162\145\x64"); goto iFkJf; t5jUK: jVLuR: goto xehtZ; ysg8P: $identity = $this->session->userdata("\x69\x64\145\156\x74\151\x74\171"); goto miLpK; BNA5y: $this->form_validation->set_rules("\x6e\145\167\x5f\x63\x6f\x6e\146\x69\162\155", $this->lang->line("\143\x68\x61\x6e\147\145\137\160\141\x73\163\x77\x6f\x72\144\x5f\x76\x61\154\x69\x64\141\x74\151\x6f\156\x5f\x6e\x65\x77\137\x70\141\x73\163\167\x6f\x72\x64\137\x63\x6f\156\146\151\162\155\x5f\154\x61\x62\x65\x6c"), "\162\145\x71\165\151\x72\x65\144"); goto a0tit; JxI41: $this->output_json($data); goto G5c_q; miLpK: $change = $this->ion_auth->change_password($identity, $this->input->post("\157\x6c\144"), $this->input->post("\156\x65\x77")); goto ZAFRv; A6qtG: $data = ["\163\x74\x61\164\165\163" => false, "\155\163\x67" => $this->ion_auth->errors()]; goto wFC7m; r4Eeo: BtTrM: goto KJulk; xehtZ: $data = ["\x73\164\x61\x74\x75\x73" => false, "\145\x72\x72\x6f\x72\x73" => ["\x6f\154\144" => form_error("\157\x6c\144"), "\156\145\x77" => form_error("\x6e\x65\x77"), "\x6e\145\x77\x5f\x63\157\x6e\x66\x69\162\x6d" => form_error("\x6e\x65\x77\x5f\x63\x6f\156\x66\151\x72\155")]]; goto NJ2Pd; KJulk: goto qwSU8; goto t5jUK; iFkJf: $this->form_validation->set_rules("\x6e\145\167", $this->lang->line("\143\x68\x61\156\x67\x65\137\x70\141\163\x73\x77\157\162\144\137\x76\141\154\x69\x64\141\x74\151\157\156\x5f\x6e\x65\167\137\x70\141\x73\163\x77\157\162\x64\137\154\x61\142\145\x6c"), "\162\x65\x71\165\151\x72\x65\x64\x7c\155\x69\156\x5f\154\x65\156\147\164\x68\133" . $this->config->item("\155\151\x6e\x5f\x70\141\163\163\167\157\162\x64\137\154\x65\x6e\147\164\150", "\x69\157\156\x5f\x61\165\x74\x68") . "\x5d\x7c\155\141\164\143\x68\x65\x73\133\156\x65\167\137\x63\157\x6e\146\x69\x72\155\135"); goto BNA5y; a0tit: if ($this->form_validation->run() === FALSE) { goto jVLuR; } goto ysg8P; G5c_q: } public function delete($id) { goto EFhFn; eBwr1: $this->output_json($data); goto W9mG7; E2pbd: $data["\163\x74\x61\x74\x75\163"] = $this->ion_auth->delete_user($id) ? true : false; goto eBwr1; EFhFn: $this->is_admin(); goto E2pbd; W9mG7: } }
