<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Log_model extends CI_Model { function __construct() { parent::__construct(); $this->load->library("\x75\163\x65\162\x5f\141\x67\x65\x6e\x74"); } public function saveLog($type, $desc) { goto aR4Yz; VFr4m: goto pYVlL; goto yp9NY; ZFZib: if ($this->agent->is_browser()) { goto RWbPm; } goto HcIgc; keFPS: $agent = $this->agent->browser() . "\40" . $this->agent->version(); goto LBlI_; r76m3: nHyIt: goto Aub65; HcIgc: if ($this->agent->is_mobile()) { goto nHyIt; } goto Br4iB; Sf_Gz: pYVlL: goto UAVyj; yp9NY: RWbPm: goto keFPS; Aub65: $agent = $this->agent->mobile(); goto Sf_Gz; O6ZfI: $ip = $this->input->ip_address(); goto jG0y6; Ey0_Q: $group = $this->ion_auth->get_users_groups($user_id)->row(); goto ZFZib; Br4iB: $agent = "\x44\141\164\141\40\x75\163\145\x72\x20\147\x61\x67\x61\x6c\x20\x64\x69\x20\144\x61\160\141\x74\153\141\x6e"; goto VFr4m; LBlI_: goto pYVlL; goto r76m3; jG0y6: $this->insertLog($user_id, $group->id, $group->name, $type, $desc, $agent, $os, $ip); goto jeX9X; aR4Yz: $user_id = $this->ion_auth->user()->row()->id; goto Ey0_Q; UAVyj: $os = $this->agent->platform(); goto O6ZfI; jeX9X: } private function insertLog($id_user, $group_id, $group_name, $type, $desc, $agent, $os, $ip) { $data = array("\151\x64\x5f\x75\163\145\162" => $id_user, "\x69\x64\137\147\162\157\x75\x70" => $group_id, "\x6e\141\x6d\145\137\x67\x72\x6f\165\160" => $group_name, "\154\157\147\x5f\x64\145\x73\143" => $desc, "\x61\x64\x64\162\145\163\163" => $ip, "\x61\x67\145\156\164" => $agent, "\144\x65\166\x69\143\x65" => $os); $this->db->insert("\x6c\x6f\147", $data); } public function loadNotifikasi() { } public function loadChat() { } public function loadAktifitas($limit = null) { goto kjqdU; sY0Wp: if (!($limit != null)) { goto t8rqp; } goto nsEYN; aqkM2: $this->db->select("\x61\56\52\54\40\x62\56\146\151\x72\163\164\x5f\x6e\x61\x6d\145\x2c\x20\142\x2e\154\141\x73\x74\137\156\141\155\145\x2c\x20\x64\x2e\156\x61\x6d\x65"); goto U45O_; KRq65: $result = $this->db->get()->result(); goto p3T1l; nsEYN: $this->db->limit($limit, 0); goto Icsnn; kjqdU: $this->db->query("\123\x45\x54\x20\x53\121\114\x5f\x42\x49\107\x5f\x53\x45\114\105\x43\124\123\x3d\x31"); goto aqkM2; p3T1l: return $result; goto E6Zfi; MMat3: $this->db->join("\x75\163\x65\162\163\x20\x62", "\142\56\151\144\x3d\x61\x2e\151\x64\137\165\163\x65\x72", "\154\145\146\164"); goto DOZNc; GvYmu: $this->db->order_by("\141\56\x6c\x6f\x67\137\164\151\155\145", "\x44\x45\123\x43"); goto KRq65; DOZNc: $this->db->join("\x67\x72\157\165\x70\163\40\x64", "\x64\56\151\144\x3d\x61\56\x69\144\137\147\162\157\x75\x70"); goto sY0Wp; U45O_: $this->db->from("\154\157\x67\40\141"); goto MMat3; Icsnn: t8rqp: goto GvYmu; E6Zfi: } public function loadAktifitasSiswa($limit = null) { goto OWbvW; NHE4Z: $result = $this->db->get()->result(); goto jOYvT; keopa: $this->db->where("\x61\56\151\x64\x5f\x67\x72\157\x75\160", "\63"); goto eEJHc; jOYvT: return $result; goto H68X_; eEJHc: $this->db->order_by("\x61\56\x6c\157\147\137\164\x69\155\x65", "\x44\105\123\103"); goto NHE4Z; Osfip: $this->db->join("\165\163\145\x72\x73\40\x62", "\142\56\x69\144\75\141\x2e\x69\x64\x5f\x75\x73\145\162", "\x6c\x65\x66\x74"); goto pTlpQ; OWbvW: $this->db->query("\x53\x45\124\40\x53\x51\x4c\x5f\x42\111\x47\137\123\x45\114\105\x43\124\123\75\x31"); goto YR9su; YR9su: $this->db->select("\141\56\52\x2c\x20\142\56\x66\151\x72\x73\164\137\156\141\155\145\x2c\x20\x62\56\154\x61\x73\164\137\x6e\x61\x6d\145\x2c\x20\x64\x2e\x6e\x61\155\145"); goto fGJB5; LJlre: $this->db->limit($limit, 0); goto eYTmJ; pTlpQ: $this->db->join("\x67\x72\157\x75\160\x73\x20\144", "\x64\x2e\151\x64\75\x61\56\x69\x64\137\147\x72\x6f\165\160"); goto wpspd; wpspd: if (!($limit != null)) { goto qiV_S; } goto LJlre; eYTmJ: qiV_S: goto keopa; fGJB5: $this->db->from("\x6c\x6f\x67\40\141"); goto Osfip; H68X_: } }
