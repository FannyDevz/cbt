<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\105\x50\101\124\x48") or exit("\x4e\157\x20\144\151\x72\x65\143\164\x20\163\x63\162\x69\x70\164\x20\x61\143\143\145\x73\163\40\x61\x6c\x6c\157\167\x65\x64"); class Dashboard_model extends CI_Model { public function getSetting() { return $this->db->get("\x73\x65\164\x74\151\156\x67")->row(); } public function getRunningText() { return $this->db->get("\x72\165\x6e\x6e\151\156\147\x5f\164\145\x78\x74")->result(); } public function total($table, $where = null) { goto yoSIC; yoSIC: if (!($where != null)) { goto hexyX; } goto YFIMm; XnN2b: return $query; goto hvaUf; OPHyk: hexyX: goto K_AlP; YFIMm: $this->db->where($where); goto OPHyk; K_AlP: $query = $this->db->get($table)->num_rows(); goto XnN2b; hvaUf: } public function hapus($table, $data, $pk) { $this->db->where_in($pk, $data); return $this->db->delete($table); } public function getProfileAdmin($id_user) { goto yikAf; mfKYz: $query = $this->db->get()->row(); goto Iao5t; Iao5t: return $query; goto PPnSs; QLB_x: $this->db->where("\141\56\x69\x64", $id_user); goto mfKYz; yikAf: $this->db->select("\142\56\x2a"); goto xOGTt; xOGTt: $this->db->from("\x75\163\145\x72\163\x20\x61"); goto dHGvn; dHGvn: $this->db->join("\165\163\x65\162\x73\137\x70\162\157\x66\x69\x6c\x65\x20\142", "\x61\x2e\x69\x64\x3d\142\56\x69\x64\x5f\165\163\145\x72", "\154\145\146\164"); goto QLB_x; PPnSs: } public function totalWaliKelas() { $query = $this->get_where("\x6a\141\x62\x61\164\141\x6e\137\x67\x75\162\x75", "\151\144\x5f\x6a\x61\x62\x61\x74\141\x6e", "\x34")->num_rows(); return $query; } public function totalSiswaKelas($id_kelas, $id_tp, $id_smt) { goto d7AO7; jQdmo: return $query; goto OA35I; uo9ah: $this->db->where("\x61\x2e\151\x64\x5f\163\x6d\x74", $id_smt); goto pLuWJ; tHORz: $query = $this->db->get()->num_rows(); goto jQdmo; ERyEX: $this->db->from("\153\145\154\x61\163\137\x73\x69\x73\x77\x61\40\141"); goto rKqOA; rKqOA: $this->db->where("\x61\x2e\151\x64\137\164\x70", $id_tp); goto uo9ah; d7AO7: $this->db->select("\x61\56\151\x64\x5f\163\x69\x73\x77\141"); goto ERyEX; pLuWJ: $this->db->where("\141\56\x69\144\x5f\153\145\154\141\163", $id_kelas); goto tHORz; OA35I: } public function totalPengawas() { goto PVqjP; PVqjP: $this->db->select("\52"); goto SfJA3; wWJmv: $query = $this->db->get("\143\x62\164\137\x70\x65\x6e\147\141\167\141\163")->num_rows(); goto Zy5J7; Zy5J7: return $query; goto iKGxy; SfJA3: $this->db->where("\x69\x64\137\x6a\141\x64\x77\x61\x6c\x20\41\x3d", "\141\x3a\60\72\173\x7d"); goto wWJmv; iKGxy: } public function totalJadwal() { goto RJu1D; RJu1D: $this->db->select("\x2a"); goto S8mJi; MAWhp: return $query; goto Wkhpp; S8mJi: $query = $this->db->get("\x63\142\x74\x5f\x6a\141\144\x77\141\x6c")->num_rows(); goto MAWhp; Wkhpp: } public function getDataTahun() { goto rUOMT; VSzvd: return $this->datatables->generate(); goto jtGJB; rUOMT: $this->datatables->select("\151\x64\x5f\x74\160\54\x20\164\141\x68\x75\156\54\x20\x61\143\164\151\x76\x65"); goto QVdOJ; QVdOJ: $this->datatables->from("\155\141\163\164\145\x72\137\164\x70"); goto VSzvd; jtGJB: } public function getTahun() { goto VxX5P; ovRfx: $result = $this->db->get("\x6d\x61\x73\164\145\x72\x5f\x74\x70")->result(); goto DLzz1; VxX5P: $this->db->order_by("\164\x61\150\165\156", "\101\x53\103"); goto ovRfx; DLzz1: return $result; goto tn2bT; tn2bT: } public function getTahunById($id) { $result = $this->db->get_where("\x6d\141\x73\x74\145\162\x5f\x74\x70", "\151\x64\137\164\x70\x3d" . $id)->row(); return $result; } public function getTahunByTahun($tahun) { $result = $this->db->get_where("\155\141\163\x74\x65\162\x5f\164\160", "\x74\x61\150\x75\x6e\x3d" . "\x22" . $tahun . "\42")->row(); return $result; } public function getTahunActive() { goto o2sSz; foYRc: $this->db->where("\x61\143\x74\151\x76\x65", 1); goto uPIe4; o2sSz: $this->db->select("\x69\144\x5f\x74\x70\54\x20\x74\x61\x68\x75\x6e"); goto J3Q61; uPIe4: $result = $this->db->get()->row(); goto TJwFA; J3Q61: $this->db->from("\x6d\x61\x73\164\145\x72\x5f\x74\x70"); goto foYRc; TJwFA: return $result; goto dX1lD; dX1lD: } public function getSemester() { goto tIHAA; tIHAA: $this->db->order_by("\163\155\x74", "\101\x53\x43"); goto pyQbp; pyQbp: $result = $this->db->get("\x6d\141\163\x74\x65\x72\x5f\x73\155\x74")->result(); goto SRd2O; SRd2O: return $result; goto plKma; plKma: } public function getSemesterById($id) { $result = $this->db->get_where("\x6d\x61\163\x74\x65\162\137\163\155\x74", "\x69\x64\137\x73\155\x74\75" . $id)->row(); return $result; } public function getSemesterByNama($nama_smt) { $result = $this->db->get_where("\x6d\x61\x73\x74\x65\162\x5f\163\x6d\x74", "\156\141\x6d\x61\137\163\x6d\x74\75" . "\42" . $nama_smt . "\42")->row(); return $result; } public function getSemesterActive() { goto arD0h; lIy9b: return $result; goto t0v0p; gbWo7: $this->db->from("\155\x61\x73\x74\145\x72\137\x73\x6d\164"); goto WwaUa; arD0h: $this->db->select("\x69\144\x5f\163\x6d\x74\x2c\40\156\141\155\141\x5f\163\x6d\x74\x2c\x20\x73\x6d\164"); goto gbWo7; WwaUa: $this->db->where("\x61\143\x74\x69\166\x65", 1); goto V1YJ6; V1YJ6: $result = $this->db->get()->row(); goto lIy9b; t0v0p: } public function getDataGuruByUserId($id_user, $id_tp, $id_smt) { goto L2JlM; A0dnI: $this->db->select("\141\x2e\151\144\x5f\x67\x75\162\165\x2c\x20\141\x2e\156\141\155\141\137\x67\165\162\165\54\x20\x61\x2e\x6e\x69\x70\54\x20\x61\x2e\x69\x64\x5f\x75\x73\145\x72\54\x20\141\56\146\x6f\164\157\54\40\x62\56\x69\x64\137\x6a\141\142\141\x74\x61\156\x2c\40\x62\56\151\144\x5f\x6b\145\154\141\x73\40\141\x73\40\x77\141\154\x69\x5f\x6b\145\x6c\x61\x73\54\40\146\56\154\145\166\145\x6c\137\x69\x64\54\x20\x67\x2e\x6c\145\x76\145\x6c"); goto NDIA8; zzHP_: $this->db->join("\152\141\142\141\x74\x61\156\137\x67\165\162\165\x20\x62", "\141\56\x69\x64\137\x67\x75\162\x75\75\142\56\151\144\x5f\x67\x75\x72\165\x20\101\x4e\104\x20\142\x2e\x69\x64\x5f\x74\x70\75" . $id_tp . "\40\x41\x4e\x44\x20\x62\56\151\144\137\163\155\164\x3d" . $id_smt, "\x6c\x65\x66\164"); goto B8nlP; IlvQd: $this->db->join("\x6c\145\166\x65\154\137\x6b\x65\x6c\x61\163\x20\x67", "\x66\x2e\x6c\145\x76\145\x6c\x5f\x69\144\x3d\x67\56\x69\144\x5f\x6c\x65\x76\145\x6c", "\154\x65\146\164"); goto mIF2B; dxn70: $this->db->join("\x6d\x61\x73\164\145\162\137\x6b\x65\x6c\x61\x73\40\x66", "\x61\x2e\151\144\137\x67\x75\x72\165\x3d\x66\56\x67\x75\x72\165\x5f\x69\x64\x20\x41\x4e\x44\x20\x66\56\x69\144\x5f\164\160\75" . $id_tp . "\x20\x41\x4e\104\x20\146\56\151\x64\137\x73\155\x74\x3d" . $id_smt, "\154\x65\x66\164"); goto IlvQd; NDIA8: $this->db->from("\155\x61\x73\x74\145\162\x5f\147\x75\x72\x75\40\x61"); goto zzHP_; L2JlM: $this->db->query("\x53\x45\124\40\123\x51\x4c\137\102\x49\107\x5f\123\x45\x4c\105\103\x54\x53\x3d\x31"); goto A0dnI; BkZ3h: return $query; goto ToyAt; mIF2B: $this->db->where("\141\56\x69\x64\x5f\x75\x73\145\x72", $id_user); goto VMNJ_; VMNJ_: $query = $this->db->get()->row(); goto BkZ3h; B8nlP: $this->db->join("\154\x65\x76\145\154\137\x67\x75\162\165\40\x65", "\142\56\x69\x64\137\x6a\141\142\x61\x74\x61\x6e\75\145\56\x69\144\x5f\x6c\x65\x76\145\x6c", "\154\145\x66\164"); goto dxn70; ToyAt: } public function getDataGuruById($id_guru, $id_tp, $id_smt) { goto Tot8T; fOezs: $this->db->from("\x6d\141\163\x74\x65\x72\x5f\147\165\162\x75\40\x61"); goto bB59k; rt7yh: $this->db->join("\155\x61\x73\164\x65\x72\137\x6b\x65\154\x61\163\x20\x66", "\x61\56\x69\144\x5f\147\165\162\x75\75\146\x2e\x67\165\x72\x75\x5f\x69\x64\40\101\x4e\x44\x20\x66\x2e\151\x64\137\x74\160\75" . $id_tp . "\x20\x41\x4e\104\40\x66\x2e\x69\144\137\x73\x6d\164\x3d" . $id_smt, "\154\x65\146\x74"); goto H0Yxm; Ek_T1: return $query; goto ecKjA; YcI1r: $this->db->join("\x6c\x65\166\145\154\x5f\147\x75\x72\x75\x20\145", "\142\x2e\151\144\x5f\x6a\141\x62\141\164\x61\x6e\x3d\x65\56\x69\x64\x5f\x6c\145\x76\x65\x6c", "\x6c\x65\x66\x74"); goto rt7yh; Tot8T: $this->db->query("\123\105\124\x20\123\x51\114\137\x42\111\x47\x5f\x53\105\x4c\x45\x43\x54\123\75\x31"); goto b0at4; bB59k: $this->db->join("\x6a\x61\x62\x61\x74\x61\156\x5f\147\x75\x72\x75\40\142", "\141\x2e\x69\144\137\147\x75\162\165\x3d\x62\56\151\144\x5f\147\165\162\165\40\x41\116\x44\40\x62\x2e\151\x64\137\164\x70\x3d" . $id_tp . "\x20\x41\x4e\104\x20\142\x2e\x69\x64\x5f\x73\155\x74\x3d" . $id_smt, "\154\x65\x66\x74"); goto YcI1r; nPmT6: $this->db->where("\141\x2e\151\144\137\147\x75\x72\x75", $id_guru); goto i9bAX; b0at4: $this->db->select("\141\x2e\151\x64\137\147\165\x72\x75\x2c\x20\141\x2e\156\141\x6d\x61\137\x67\x75\x72\x75\54\x20\141\56\x6e\151\x70\x2c\40\141\56\151\x64\x5f\165\163\x65\x72\54\40\141\x2e\x66\157\x74\157\54\x20\x62\56\151\144\x5f\x6a\141\x62\141\x74\x61\156\x2c\x20\142\56\151\x64\x5f\x6b\145\154\141\163\40\141\163\x20\x77\141\154\x69\137\x6b\145\154\x61\163\54\40\146\56\154\145\166\x65\154\137\151\x64\x2c\40\147\x2e\x6c\x65\166\145\x6c"); goto fOezs; H0Yxm: $this->db->join("\154\145\x76\x65\x6c\137\x6b\145\x6c\141\x73\x20\x67", "\146\56\x6c\x65\x76\145\x6c\x5f\151\x64\75\147\x2e\x69\144\137\x6c\145\x76\145\154", "\x6c\145\146\164"); goto nPmT6; i9bAX: $query = $this->db->get()->row(); goto Ek_T1; ecKjA: } public function getListGuruByUserId($id_tp, $id_smt) { goto JXPfe; D0t7s: $query = $this->db->get()->result(); goto VYLey; STxP0: foreach ($query as $guru) { $rest[$guru->id_guru] = $guru; S1FT0: } goto LcNSk; VYLey: $rest = []; goto STxP0; saMCr: $this->db->join("\154\145\x76\x65\154\137\x67\165\162\x75\40\145", "\142\56\x69\x64\x5f\x6a\x61\142\x61\x74\141\156\75\145\x2e\151\144\x5f\x6c\x65\x76\x65\x6c", "\154\145\x66\x74"); goto sWrCa; wQnPA: $this->db->from("\x6d\141\x73\164\x65\162\137\147\165\162\165\x20\x61"); goto rlcAo; JXPfe: $this->db->query("\x53\x45\x54\40\123\121\114\137\x42\111\x47\137\123\x45\114\x45\x43\124\123\x3d\61"); goto tsA28; L9Sgw: return $rest; goto qLmxI; LcNSk: a5jQt: goto L9Sgw; rlcAo: $this->db->join("\x6a\x61\142\141\164\x61\156\x5f\x67\165\162\165\40\x62", "\141\x2e\151\144\x5f\x67\165\x72\165\75\x62\56\x69\144\137\x67\165\162\x75\40\101\x4e\104\40\x62\x2e\x69\144\137\x74\x70\75" . $id_tp . "\x20\101\116\104\x20\x62\x2e\151\144\x5f\163\155\x74\x3d" . $id_smt, "\x6c\145\x66\x74"); goto saMCr; F1C26: $this->db->join("\x6c\145\166\145\x6c\137\153\145\154\x61\163\40\147", "\x66\x2e\154\145\166\x65\x6c\137\x69\x64\x3d\147\x2e\151\x64\x5f\154\145\166\x65\x6c", "\x6c\145\x66\164"); goto D0t7s; tsA28: $this->db->select("\x61\x2e\151\144\x5f\x67\x75\162\165\x2c\x20\x61\x2e\x6e\141\155\141\137\147\165\x72\165\54\40\x61\x2e\151\x64\137\x75\163\145\x72\54\x20\x61\56\146\157\164\157\x2c\40\142\x2e\x69\x64\x5f\152\141\x62\x61\164\x61\156\x2c\40\x62\56\x69\144\137\x6b\145\x6c\x61\x73\40\141\163\x20\167\141\x6c\151\137\153\x65\x6c\x61\x73\x2c\x20\x66\56\154\145\166\x65\154\x5f\x69\144\54\40\x67\x2e\x6c\145\166\145\154"); goto wQnPA; sWrCa: $this->db->join("\155\x61\x73\164\145\x72\x5f\153\145\154\x61\163\x20\x66", "\141\x2e\x69\144\137\147\165\162\x75\75\146\56\x67\165\162\165\137\x69\x64\x20\101\116\x44\x20\146\56\x69\144\137\164\x70\75" . $id_tp . "\x20\101\116\104\x20\146\x2e\151\x64\137\163\x6d\164\x3d" . $id_smt, "\154\x65\x66\164"); goto F1C26; qLmxI: } public function getDetailGuruByUserId($id_user, $id_tp, $id_smt) { goto U5SNf; U5SNf: $this->db->query("\123\x45\x54\40\x53\121\x4c\137\x42\111\x47\x5f\123\x45\x4c\x45\x43\124\x53\x3d\x31"); goto YFQub; YFQub: $this->db->select("\52"); goto nwQld; Eve8Y: return $query; goto d1ZeO; nwQld: $this->db->from("\x6d\141\163\x74\145\162\x5f\147\165\x72\x75\x20\141"); goto LdwCt; LdwCt: $this->db->join("\152\141\142\141\164\x61\x6e\x5f\x67\x75\162\x75\40\142", "\141\56\x69\144\x5f\147\165\x72\x75\75\x62\x2e\151\144\x5f\x67\x75\162\165\x20\x41\116\104\x20\142\56\151\144\137\x74\x70\75" . $id_tp . "\40\101\x4e\104\x20\x62\56\x69\x64\x5f\163\x6d\164\x3d" . $id_smt, "\154\145\146\164"); goto AFCf7; KYO4w: $this->db->join("\x6d\141\x73\x74\145\162\137\x6b\145\154\141\x73\40\x66", "\141\x2e\x69\144\x5f\147\x75\162\x75\75\x66\56\x67\165\162\165\137\151\x64\40\x41\116\x44\40\x66\x2e\x69\144\137\x74\x70\75" . $id_tp . "\x20\x41\116\x44\x20\146\56\151\x64\x5f\163\155\164\x3d" . $id_smt, "\154\x65\146\x74"); goto BqpFu; oxpto: $query = $this->db->get()->row(); goto Eve8Y; BqpFu: $this->db->where("\141\56\x69\144\x5f\165\x73\x65\x72", $id_user); goto oxpto; AFCf7: $this->db->join("\154\145\166\x65\x6c\137\x67\165\x72\165\x20\145", "\142\56\x69\144\137\152\x61\142\141\x74\141\156\x3d\145\x2e\151\x64\137\x6c\x65\x76\145\154", "\x6c\145\x66\164"); goto KYO4w; d1ZeO: } public function getKelasByMapel($id_mapel = null) { goto sAk2n; kN_gH: return $query; goto NltRw; atRg6: $this->db->select("\52"); goto U5Ryt; UiUmv: $this->db->join("\x6d\141\163\x74\145\162\137\155\x61\x70\145\154\x20\142", "\x61\56\155\x61\x70\x65\154\137\x69\144\x3d\x62\56\x69\x64\137\155\141\160\x65\x6c", "\x6c\x65\146\x74"); goto TWSMf; PnMR1: $query = $this->db->get()->row(); goto kN_gH; TWSMf: $this->db->join("\154\x65\x76\145\x6c\137\147\165\162\165\40\x64", "\141\x2e\154\x65\x76\x65\154\x5f\151\x64\75\x64\x2e\x69\144\137\x6c\x65\x76\x65\154", "\154\145\146\164"); goto PnMR1; U5Ryt: $this->db->from("\x6d\141\163\164\x65\162\137\x6b\x65\154\x61\x73"); goto UiUmv; sAk2n: $this->db->query("\123\105\124\40\x53\x51\x4c\x5f\102\111\107\137\123\x45\x4c\105\x43\124\x53\75\x31"); goto atRg6; NltRw: } public function get_where($table, $pk, $id, $join = null, $order = null) { goto x09XE; pbx_q: $this->db->where($pk, $id); goto Rhygx; PtSNw: JneBF: goto zT3ja; x09XE: $this->db->select("\52"); goto oZyNz; MqRRw: oPvuL: goto iQSk9; Rhygx: if (!($join !== null)) { goto DDCK4; } goto gCGRv; QJ4sx: foreach ($order as $field => $sort) { $this->db->order_by($field, $sort); L20B2: } goto TMnxH; oZyNz: $this->db->from($table); goto pbx_q; zT3ja: DDCK4: goto JpgRS; TMnxH: rqFAf: goto MqRRw; iQSk9: $query = $this->db->get(); goto qy8oU; qy8oU: return $query; goto rTKqL; JpgRS: if (!($order !== null)) { goto oPvuL; } goto QJ4sx; gCGRv: foreach ($join as $table => $field) { $this->db->join($table, $field); obwHd: } goto PtSNw; rTKqL: } public function create($table, $data) { $insert = $this->db->insert($table, $data); return $insert; } public function update($table, $data, $pk, $id = null, $batch = false) { goto nyvt2; a20b1: Z_4Wf: goto m7ICx; ans9E: wiQc2: goto zsyuu; A8Vjd: $insert = $this->db->update_batch($table, $data, $pk); goto U41Lv; m7ICx: return $insert; goto cDkiF; nyvt2: if ($batch === false) { goto wiQc2; } goto A8Vjd; U41Lv: goto Z_4Wf; goto ans9E; zsyuu: $insert = $this->db->update($table, $data, array($pk => $id)); goto a20b1; cDkiF: } public function getDataSiswa($username, $id_tp, $id_smt) { goto l2Qyz; V_Oea: $this->db->select("\52"); goto fhFLM; Toi10: $this->db->join("\x6b\145\154\x61\163\137\163\151\163\167\x61\40\x62", "\141\x2e\151\144\x5f\163\151\x73\x77\141\x3d\x62\x2e\x69\144\x5f\163\x69\163\x77\x61\40\101\116\x44\40\142\x2e\x69\144\x5f\164\160\x3d" . $id_tp . "\x20\x41\x4e\104\x20\x62\56\151\144\x5f\163\155\164\75" . $id_smt, "\x6c\145\146\164"); goto ITgkk; l2Qyz: $this->db->query("\x53\105\x54\40\123\121\x4c\x5f\x42\111\x47\x5f\123\105\x4c\x45\103\x54\x53\x3d\x31"); goto V_Oea; FvFJP: return $query; goto WuVS8; ET7ab: $this->db->where("\x75\x73\145\162\x6e\x61\x6d\145", $username); goto WrUsl; fhFLM: $this->db->from("\x6d\141\163\164\145\x72\137\x73\x69\163\x77\141\x20\141"); goto Toi10; ITgkk: $this->db->join("\x6d\x61\x73\164\145\x72\137\153\145\x6c\141\163\x20\x63", "\142\56\151\144\137\153\x65\154\x61\x73\x3d\143\x2e\x69\x64\137\x6b\145\154\x61\163\x20\101\x4e\x44\x20\x63\56\151\144\137\164\160\x3d" . $id_tp . "\40\x41\x4e\104\x20\143\x2e\151\144\x5f\163\155\x74\75" . $id_smt, "\154\145\146\164"); goto ygtGB; WrUsl: $query = $this->db->get()->row(); goto FvFJP; ygtGB: $this->db->join("\143\142\164\137\x73\x65\163\x69\137\163\151\x73\x77\141\40\144", "\141\56\151\144\137\163\x69\163\167\141\75\144\x2e\x73\x69\x73\167\x61\137\151\x64\x20\x41\x4e\104\40\144\56\x74\x70\x5f\151\x64\75" . $id_tp . "\x20\101\116\x44\40\x64\x2e\x73\155\164\x5f\151\x64\75" . $id_smt, "\x6c\145\x66\164"); goto ET7ab; WuVS8: } public function loadPengumuman($id_for) { goto BLA3y; IDhHm: $this->db->from("\x70\x65\156\x67\165\x6d\165\155\141\156\x20\141"); goto WfoYL; WfoYL: $this->db->join("\x6d\141\x73\x74\145\162\x5f\147\165\162\x75\x20\x62", "\141\56\144\x61\x72\151\x3d\x62\56\151\x64\137\147\165\162\165", "\154\145\146\x74"); goto qJtUy; qJtUy: $this->db->where("\x6b\145\x70\141\144\141", $id_for); goto tKZbm; uKqYi: return $query; goto IqHmk; tKZbm: $query = $this->db->get()->result(); goto uKqYi; BLA3y: $this->db->select("\x61\x2e\x2a\54\x20\142\56\x6e\x61\155\x61\x5f\147\165\x72\165\x2c\x20\142\x2e\146\157\x74\157"); goto IDhHm; IqHmk: } public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null) { goto B2UZ7; SOjG6: $this->db->where("\141\x2e\151\144\x5f\x73\155\x74", $id_smt); goto gBmI0; fZ8zq: fzPtr: goto r9AZs; Lrp2t: $this->db->where("\141\56\151\144\x5f\150\x61\x72\x69", $id_hari); goto tL4WJ; L7AO6: $this->db->where("\x61\56\151\144\137\153\145\x6c\141\x73", $id_kelas); goto fZ8zq; tL4WJ: pFT6Y: goto CZMed; dtO_2: return $query; goto I1kbD; EMeuG: $this->db->join("\x6d\x61\x73\164\145\162\137\155\141\x70\x65\154\40\x62", "\142\56\x69\x64\137\x6d\141\x70\145\154\x3d\141\x2e\x69\x64\x5f\155\141\x70\x65\x6c", "\154\145\x66\x74"); goto XJKwC; gBmI0: if (!($id_kelas != null)) { goto fzPtr; } goto L7AO6; B2UZ7: $this->db->select("\x2a"); goto YWWFy; r9AZs: if (!($id_hari != null)) { goto pFT6Y; } goto Lrp2t; YWWFy: $this->db->from("\153\145\x6c\141\x73\137\x6a\141\x64\x77\x61\154\x5f\x6d\141\160\145\x6c\x20\x61"); goto EMeuG; CZMed: $query = $this->db->get()->result(); goto dtO_2; XJKwC: $this->db->where("\141\x2e\x69\144\137\164\x70", $id_tp); goto SOjG6; I1kbD: } public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null) { goto yCN2s; eMfTR: if ($id_kelas != null) { goto aqolD; } goto fmmej; yCN2s: $this->db->select("\52"); goto jP1Wp; fmmej: $query = $this->db->get()->result(); goto bOjtj; Bs2E9: $this->db->where("\x69\144\137\163\x6d\164", $id_smt); goto eMfTR; jP1Wp: $this->db->from("\x6b\145\154\141\x73\x5f\x6a\141\x64\x77\x61\154\x5f\x6b\142\x6d"); goto ecQel; Fty4v: aqolD: goto e_Bir; bOjtj: goto y69bu; goto Fty4v; ecQel: $this->db->where("\151\144\137\164\160", $id_tp); goto Bs2E9; eGijn: y69bu: goto Skqn_; Skqn_: return $query; goto AAq03; e_Bir: $this->db->where("\x69\x64\137\x6b\145\x6c\x61\163", $id_kelas); goto zRlf4; zRlf4: $query = $this->db->get()->row(); goto eGijn; AAq03: } }
