<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasmaterijadwal extends CI_Controller { public function __construct() { goto ZCCGn; ZCCGn: parent::__construct(); goto Qt_8R; fq2Hb: $this->load->model("\104\141\x73\150\x62\157\x61\162\x64\x5f\155\x6f\x64\x65\x6c", "\144\141\163\x68\x62\157\141\x72\144"); goto wX3pF; Kmrg1: redirect("\141\x75\x74\x68"); goto NZh_f; Qt_8R: if ($this->ion_auth->logged_in()) { goto XOqQm; } goto Kmrg1; nvl0s: $this->form_validation->set_error_delimiters('', ''); goto xqUw7; m1nN2: $this->load->model("\x44\162\157\160\144\x6f\x77\156\137\x6d\157\x64\145\154", "\x64\162\157\x70\144\157\167\x6e"); goto nvl0s; zay4u: $this->load->model("\x4d\x61\x73\x74\x65\162\x5f\155\157\144\x65\x6c", "\x6d\141\163\x74\145\162"); goto fq2Hb; zfB1R: $this->load->model("\x4c\x6f\x67\x5f\155\157\144\x65\154", "\x6c\x6f\x67\x67\151\156\x67"); goto MuHLv; lhE9Q: $this->load->library(["\x64\141\164\141\x74\141\x62\x6c\x65\x73", "\146\157\x72\155\x5f\166\x61\x6c\151\144\x61\164\151\157\x6e"]); goto zay4u; MuHLv: $this->load->model("\113\145\154\141\x73\x5f\x6d\x6f\x64\x65\154", "\153\145\154\141\163"); goto m1nN2; NZh_f: XOqQm: goto lhE9Q; wX3pF: $this->load->model("\103\142\164\137\x6d\157\x64\x65\154", "\143\142\x74"); goto zfB1R; xqUw7: } public function output_json($data, $encode = true) { goto O3nuG; Ejjxm: WkhmH: goto PlbK4; PlbK4: $this->output->set_content_type("\x61\x70\160\154\151\x63\x61\164\x69\x6f\x6e\x2f\x6a\x73\157\156")->set_output($data); goto HOznZ; O3nuG: if (!$encode) { goto WkhmH; } goto Z03p8; Z03p8: $data = json_encode($data); goto Ejjxm; HOznZ: } public function index() { goto oIh80; v7tqL: $this->load->view("\x6d\x65\155\x62\145\162\x73\57\147\x75\162\x75\x2f\164\145\155\160\154\141\x74\x65\x73\57\150\x65\141\x64\145\x72", $data); goto vT99h; PDJoa: Z92uj: goto nZUHo; Ok9O5: $tp = $this->dashboard->getTahunActive(); goto Wp038; zpeon: $data["\x74\x70"] = $this->dashboard->getTahun(); goto i4tX2; i4tX2: $data["\164\160\137\x61\143\164\151\166\145"] = $tp; goto UVEUI; ffcqP: $data["\x6d\x65\x74\x68\x6f\144"] = ''; goto oA0t1; UhY9U: goto kZi3a; goto GBSay; FBC1n: $thn = $smt->id_smt == "\x31" ? $tahun[0] : $tahun[1]; goto YLOg2; Wp038: $smt = $this->dashboard->getSemesterActive(); goto zpeon; Sna1q: $data["\x69\x64\x5f\x6b\145\x6c\141\163"] = "\x30"; goto ffcqP; rA_l0: $data["\x64\141\164\145\137\163\145\154\x65\143\x74\x65\144"] = $thn . "\x2d" . $bln . "\x2d" . date("\x64"); goto Nc1Yr; dwCmx: if ($this->ion_auth->in_group("\147\x75\x72\165")) { goto hLN7E; } goto qIr8A; UVEUI: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto Fzzi3; mWDaV: $data["\164\x68\156\137\x73\x65\x6c\x65\x63\164\x65\144"] = $tp->tahun; goto y0FoB; C35e7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ID_Bw; c8lkw: $data = ["\x75\x73\145\162" => $user, "\x6a\x75\144\x75\x6c" => "\x4a\141\144\x77\141\x6c\x20\120\x65\x6c\x61\152\141\x72\141\x6e", "\x73\165\142\x6a\x75\x64\165\154" => "\x53\x65\x74\x20\112\x61\144\167\x61\x6c\40\x50\x65\154\x61\152\141\x72\141\156", "\x73\145\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto Ok9O5; LQq_2: $data["\152\x6d\x6c\x4d\x61\x70\x65\x6c"] = []; goto mWDaV; YLOg2: $data["\142\154\x6e\137\163\145\x6c\x65\143\164\145\144"] = $bln; goto rA_l0; nZUHo: $data["\160\x72\157\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Qc2ad; oA0t1: $data["\x6a\155\x6c\x49\163\x74"] = []; goto LQq_2; GBSay: hLN7E: goto C35e7; Nc1Yr: if ($this->ion_auth->is_admin()) { goto Z92uj; } goto dwCmx; Fzzi3: $data["\x73\155\x74\137\x61\143\x74\151\166\145"] = $smt; goto dGgHP; vT99h: $this->load->view("\x6b\145\154\x61\x73\x2f\x6d\141\x74\x65\x72\x69\152\x61\x64\167\141\154\x2f\144\141\x74\x61"); goto krmUx; qIr8A: goto kZi3a; goto PDJoa; jbKqU: $this->load->view("\x6b\x65\x6c\141\x73\57\155\141\x74\145\x72\x69\x6a\141\x64\x77\141\x6c\57\x64\x61\164\141"); goto kYz5U; oIh80: $user = $this->ion_auth->user()->row(); goto c8lkw; kYz5U: $this->load->view("\137\164\145\155\160\154\x61\x74\145\163\57\144\x61\163\x68\x62\157\141\x72\144\57\x5f\x66\x6f\157\164\145\x72"); goto UhY9U; y0FoB: $bln = $smt->id_smt == "\61" ? "\x37" : "\x31"; goto TBsne; TBsne: $tahun = explode("\x2f", $tp->tahun); goto FBC1n; dGgHP: $data["\153\x65\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto Sna1q; krmUx: $this->load->view("\155\145\155\x62\145\x72\x73\57\147\165\x72\x75\57\x74\x65\155\160\x6c\141\x74\x65\x73\57\146\x6f\157\164\145\x72"); goto e7vIv; e7vIv: kZi3a: goto W1Nbb; Qc2ad: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\x74\145\163\57\x64\x61\163\x68\x62\157\x61\162\x64\57\x5f\x68\x65\141\x64\x65\162", $data); goto jbKqU; ID_Bw: $data["\147\165\162\165"] = $guru; goto v7tqL; W1Nbb: } public function kelas() { goto VJIRp; ADbWJ: foreach ($jadm as $j) { $jadwal_mapel[] = ["\x6a\x61\x64\x77\141\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; qFHy5: } goto Kf_Wh; sibVi: goto arwQ6; goto B5dOo; SuexT: $data["\x67\165\x72\x75"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto XMriY; MXY1c: $jadwal_mapel[] = ["\152\x61\x64\x77\x61\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto PcIvr; AWMOJ: if (!($i < $jml_mapel)) { goto YLQmo; } goto MXY1c; TjzvY: $data["\153\145\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto LIaYV; JQzAJ: $setting = $this->dashboard->getSetting(); goto YCSaB; J2AzV: $data["\x6d\x65\x74\x68\157\144"] = "\x61\144\144"; goto W9fce; N3ELC: $date = $this->input->get("\144\141\164\145"); goto mo4G7; suJAg: EhbSd: goto AWMOJ; dXZ25: if ($this->ion_auth->in_group("\147\x75\x72\x75")) { goto laU8A; } goto sibVi; Oz464: $data["\144\145\x74\141\151\154\x5f\152\141\x64\x77\141\154\137\x6d\x61\164\x65\162\x69"] = isset($semua_materi[1]) ? $semua_materi[1] : []; goto iVb7n; qejjk: $this->load->view("\x5f\x74\145\155\160\x6c\141\164\x65\163\x2f\x64\x61\163\x68\x62\157\x61\x72\144\57\137\150\x65\x61\x64\x65\x72", $data); goto PqRjI; zVbxN: laU8A: goto SuexT; vNTSS: $semua_materi = $this->kelas->getAllJadwalMateriByKelas($tp->id_tp, $smt->id_smt); goto Oz464; L8ew1: $data["\151\x64\137\153\x65\154\x61\163"] = $kelas; goto zq7Q0; mBuWv: $data["\157\x70\163\x69\137\x6d\x61\x74\x65\x72\151"] = $this->kelas->getAllMateriByKelas($tp->id_tp, $smt->id_smt); goto vNTSS; SGGhd: $week = [date("\x59\x2d\155\x2d\x64", strtotime("\155\157\156\144\141\171\x20\x74\150\x69\x73\x20\167\145\x65\153", strtotime($date))), date("\131\x2d\155\55\144", strtotime("\x74\165\x65\x73\144\x61\x79\40\x74\150\151\x73\x20\167\x65\x65\153", strtotime($date))), date("\x59\55\155\55\x64", strtotime("\167\145\144\156\145\x73\144\x61\171\x20\x74\x68\151\163\x20\167\145\x65\x6b", strtotime($date))), date("\131\x2d\x6d\55\144", strtotime("\164\x68\165\162\x73\x64\141\171\x20\164\150\x69\163\40\167\145\145\153", strtotime($date))), date("\131\x2d\x6d\55\x64", strtotime("\x66\162\151\144\141\171\40\x74\x68\151\x73\40\167\145\145\x6b", strtotime($date))), date("\131\55\155\55\x64", strtotime("\x73\141\x74\x75\x72\144\x61\171\40\164\x68\x69\163\40\x77\x65\x65\x6b", strtotime($date)))]; goto f989U; PI1sz: $tp = $this->dashboard->getTahunActive(); goto tBbtP; GvSGy: if ($jadk == null) { goto eqHKC; } goto vOAPt; MH8R1: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto r32_2; VHFRE: $data["\x6d\141\x70\x65\x6c\x73"] = $this->master->getAllMapel(); goto SGGhd; kIU2L: $i++; goto AHPG5; nqmoA: $kelas = $this->input->get("\x6b\145\x6c\x61\163"); goto N3ELC; D4PRq: $bulan = $this->input->get("\x62\x75\x6c\141\156"); goto nqmoA; VJIRp: $tahun = $this->input->get("\164\141\x68\x75\x6e"); goto D4PRq; PcIvr: xwDwB: goto kIU2L; PqRjI: $this->load->view("\153\145\x6c\141\x73\57\155\x61\x74\x65\x72\151\152\x61\x64\x77\141\154\x2f\144\141\x74\x61"); goto x_AKP; r33sZ: $this->load->view("\x6b\145\154\141\163\x2f\x6d\x61\164\145\162\151\x6a\141\144\x77\141\154\57\144\x61\164\141"); goto WJnWs; UQljK: $data["\x74\x70"] = $this->dashboard->getTahun(); goto oZbKE; W9fce: FpY48: goto wxOFG; gW9EW: $data["\x77\145\x65\153"] = $week; goto mBuWv; my0rk: $data["\144\141\x74\x65\x5f\163\145\x6c\x65\143\164\x65\144"] = $date; goto gW9EW; mo4G7: $user = $this->ion_auth->user()->row(); goto JQzAJ; ssBCw: rFbza: goto L8ew1; r32_2: $data["\163\x6d\164\137\x61\x63\164\x69\166\x65"] = $smt; goto TjzvY; WJnWs: $this->load->view("\155\x65\155\x62\x65\x72\163\57\x67\165\x72\165\57\x74\x65\x6d\160\x6c\x61\x74\145\x73\57\x66\x6f\x6f\164\x65\x72"); goto fqvBN; wxOFG: $data["\152\x61\x64\x77\141\x6c\x5f\x6d\x61\160\145\x6c"] = $jadwal_mapel; goto VHFRE; x_AKP: $this->load->view("\137\164\x65\155\x70\154\x61\164\x65\x73\57\x64\x61\163\150\x62\x6f\x61\x72\x64\x2f\137\146\157\157\164\145\162"); goto bcK_n; uvKVw: $data["\x6d\x65\164\150\x6f\x64"] = "\x65\x64\x69\164"; goto p3W6y; Kf_Wh: X1yi5: goto uvKVw; YCSaB: $data = ["\165\163\x65\x72" => $user, "\x6a\x75\x64\x75\154" => "\112\x61\x64\x77\141\x6c\40\x4d\141\x74\x65\x72\x69\x20\57\40\x54\165\x67\141\163", "\163\x75\142\x6a\x75\144\165\154" => "\x53\x65\164\40\x4a\x61\144\167\141\154\x20\x4d\x61\x74\145\x72\x69\40\x2f\40\x54\x75\x67\141\163", "\163\145\x74\x74\x69\156\147" => $setting]; goto PI1sz; AHPG5: goto EhbSd; goto T353U; pe7XN: EO642: goto joVfx; iVb7n: $data["\144\145\164\141\151\154\137\152\x61\144\167\x61\154\137\x74\165\147\x61\x73"] = isset($semua_materi[2]) ? $semua_materi[2] : []; goto jyjgH; B5dOo: XRygS: goto VAHwp; zq7Q0: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto qqRN6; tBbtP: $smt = $this->dashboard->getSemesterActive(); goto UQljK; fqvBN: arwQ6: goto KeHLv; cSlVk: if ($jadm == null) { goto EO642; } goto ADbWJ; KhmcM: eqHKC: goto VOQmT; f989U: $data["\164\x68\156\137\163\145\154\145\x63\164\145\144"] = $tahun; goto LYpH4; T353U: YLQmo: goto J2AzV; p3W6y: goto FpY48; goto pe7XN; VAHwp: $data["\160\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto qejjk; VOQmT: $data["\152\141\144\x77\141\x6c\137\x6b\x62\x6d"] = json_decode(json_encode(["\151\144\x5f\x74\x70" => $tp->tahun, "\x69\144\x5f\163\155\x74" => $smt->smt, "\151\144\x5f\x6b\145\154\141\x73" => $kelas, "\153\142\155\x5f\x6a\x61\x6d\x5f\x70\x65\154" => '', "\x6b\x62\x6d\x5f\x6a\141\x6d\x5f\155\165\x6c\141\x69" => '', "\153\142\155\x5f\x6a\x6d\154\x5f\x6d\141\x70\145\154\x5f\x68\141\162\x69" => '', "\151\x73\x74\151\162\141\x68\141\x74" => serialize([]), "\141\144\141" => false])); goto ssBCw; oZbKE: $data["\x74\160\x5f\x61\143\164\x69\x76\145"] = $tp; goto MH8R1; jyjgH: if ($this->ion_auth->is_admin()) { goto XRygS; } goto dXZ25; LIaYV: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto GvSGy; joVfx: $i = 0; goto suJAg; bcK_n: goto arwQ6; goto zVbxN; vOAPt: $data["\x6a\x61\x64\x77\141\154\137\153\142\x6d"] = $jadk; goto qjO_8; LYpH4: $data["\142\154\x6e\137\x73\145\154\x65\143\x74\145\144"] = $bulan; goto my0rk; qjO_8: goto rFbza; goto KhmcM; XMriY: $this->load->view("\155\x65\155\x62\145\x72\163\57\x67\165\162\x75\x2f\164\x65\x6d\x70\x6c\141\164\x65\163\57\150\145\x61\x64\x65\x72", $data); goto r33sZ; qqRN6: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto cSlVk; KeHLv: } public function setJadwal() { goto MaM43; MaM43: $istirahat = []; goto t7kvz; iM9sQ: $i++; goto QTS_K; maVFD: $id_tp = $this->master->getTahunActive()->id_tp; goto bslrJ; AhXaj: $this->logging->saveLog(3, "\x6d\x65\162\x75\x62\141\150\x20\x6a\x61\x64\167\141\x6c\40\160\x65\154\x61\x6a\x61\162\141\x6e"); goto Guvul; nSjZ2: if (!$jamke) { goto vS4tL; } goto nK0En; TH8TX: $update = $this->db->replace("\x6b\145\154\141\163\x5f\152\x61\144\167\x61\154\137\x6b\142\155", $insert); goto AhXaj; nK0En: $istirahat[] = ["\151\x73\x74" => $jamke, "\144\165\x72" => $durasi]; goto mCPpF; ppa04: if (!($i < 5)) { goto QQlVo; } goto wrVbZ; vDWJA: OSoiS: goto ppa04; mCPpF: vS4tL: goto KXT2x; Guvul: $data["\163\164\141\x74\165\x73"] = $update; goto ZRQxi; Axg0i: $id_kelas = $this->input->post("\151\144\137\x6b\145\x6c\x61\x73", true); goto xQsXs; wrVbZ: $jamke = $this->input->post("\151\163\x74" . $i, true); goto JEa9s; KXT2x: J6FFX: goto iM9sQ; JEa9s: $durasi = $this->input->post("\x64\x75\x72\137\x69\x73\164" . $i, true); goto nSjZ2; t7kvz: $i = 1; goto vDWJA; QTS_K: goto OSoiS; goto WfrNh; WfrNh: QQlVo: goto maVFD; xQsXs: $insert = ["\x69\x64\137\x6b\142\155" => $id_tp . $id_smt . $id_kelas, "\x69\144\137\x74\160" => $id_tp, "\151\144\137\163\155\x74" => $id_smt, "\x69\x64\137\153\x65\154\x61\x73" => $id_kelas, "\x6b\x62\x6d\x5f\152\x61\155\137\x70\x65\x6c" => $this->input->post("\152\x61\155\137\155\141\160\x65\x6c", true), "\153\142\155\x5f\152\x61\x6d\137\x6d\x75\x6c\x61\x69" => $this->input->post("\152\141\x6d\137\155\x75\x6c\x61\x69", true), "\153\x62\x6d\137\x6a\155\x6c\137\155\141\x70\145\x6c\x5f\x68\141\162\x69" => $this->input->post("\152\155\x6c\137\x6d\141\x70\x65\154", true), "\151\x73\164\x69\162\141\150\141\164" => serialize($istirahat)]; goto TH8TX; ZRQxi: $this->output_json($data); goto wrwd9; bslrJ: $id_smt = $this->master->getSemesterActive()->id_smt; goto Axg0i; wrwd9: } public function setMapel() { goto voyNy; nGdhN: foreach ($input as $d) { goto Ie7pH; ajIkT: $update = $this->db->replace("\153\x65\x6c\141\163\137\x6a\141\144\167\x61\154\137\155\141\160\x65\154", $data); goto PYhNZ; Ie7pH: $data = ["\x69\144\137\x6a\x61\144\x77\x61\x6c" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\144\x5f\164\x70" => $d->id_tp, "\x69\144\x5f\x73\x6d\164" => $d->id_smt, "\x69\144\137\153\145\x6c\141\163" => $id_kelas, "\151\x64\137\150\141\x72\x69" => $d->id_hari, "\152\141\155\x5f\153\x65" => $d->jam_ke, "\151\x64\x5f\x6d\x61\160\x65\x6c" => $d->id_mapel]; goto ajIkT; PYhNZ: Gep99: goto FDNG0; FDNG0: } goto LoGdz; f7SzV: $this->output_json($res); goto jHXQo; voyNy: $input = json_decode($this->input->post("\x64\141\x74\141", true)); goto MSUzS; lwIqZ: $res["\163\x74\x61\x74\165\x73"] = $update; goto f7SzV; MSUzS: $id_kelas = $this->input->post("\x69\x64\x5f\153\x65\154\x61\163", true); goto nGdhN; LoGdz: krx66: goto lwIqZ; jHXQo: } public function saveJadwal() { goto nRkDk; xauly: foreach ($input_tugas as $im) { goto rYP87; rYP87: $insert = ["\x6a\145\x6e\x69\x73" => "\x32", "\x69\x64\137\153\152\x6d" => $im->id_kjm, "\x69\x64\137\x74\160" => $im->id_tp, "\151\x64\137\x73\155\x74" => $im->id_smt, "\151\144\137\x6b\x65\154\141\163" => $im->id_kelas, "\x69\144\x5f\155\141\x74\x65\162\x69" => $im->id_materi, "\151\144\137\155\x61\x70\145\154" => $im->id_mapel, "\152\141\x64\x77\x61\154\137\x6d\x61\x74\x65\162\x69" => $im->jadwal_materi]; goto HTwQW; vqkV1: PyopV: goto httH6; HTwQW: $update = $this->db->replace("\153\145\x6c\x61\163\137\x6a\141\x64\167\141\x6c\137\x6d\141\164\x65\x72\x69", $insert); goto vqkV1; httH6: } goto PeeHC; OdswS: $input_tugas = json_decode($this->input->post("\164\165\147\x61\163", true)); goto ZdXC_; nRkDk: $input_materi = json_decode($this->input->post("\x6d\141\x74\x65\162\151", true)); goto OdswS; PeeHC: eID9V: goto rxMDz; ZdXC_: foreach ($input_materi as $im) { goto guX40; Rvnj4: $update = $this->db->replace("\153\145\x6c\141\163\137\152\141\144\x77\141\154\137\x6d\141\164\145\162\151", $insert); goto Clm1a; Clm1a: upDxu: goto O68id; guX40: $insert = ["\x6a\x65\156\151\163" => "\x31", "\151\x64\137\x6b\152\155" => $im->id_kjm, "\151\144\x5f\x74\160" => $im->id_tp, "\151\x64\137\x73\155\x74" => $im->id_smt, "\x69\x64\x5f\x6b\145\154\x61\163" => $im->id_kelas, "\x69\x64\137\155\x61\164\145\162\151" => $im->id_materi, "\151\144\x5f\155\x61\160\145\154" => $im->id_mapel, "\152\x61\x64\x77\141\x6c\x5f\x6d\x61\164\x65\162\x69" => $im->jadwal_materi]; goto Rvnj4; O68id: } goto ZdpAP; rxMDz: $this->logging->saveLog(3, "\x6d\x65\x72\165\142\141\x68\x20\152\141\x64\x77\x61\154\x20\x6d\x61\x74\145\162\151\x20\144\141\x6e\x20\x74\165\147\x61\x73"); goto TYCF3; TYCF3: $this->output_json($update); goto jjaon; ZdpAP: ErT81: goto xauly; jjaon: } }
