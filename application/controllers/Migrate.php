<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\x50\x41\x54\110") or exit("\x4e\157\x20\x64\x69\162\x65\143\x74\40\x73\143\x72\151\160\164\x20\141\143\143\145\163\x73\x20\x61\154\154\x6f\x77\145\144"); class Migrate extends CI_Controller { public function index() { echo "\103\x6f\x6e\164\x72\157\x6c\x6c\145\162\40\146\x69\x6c\145\40\x69\x6e\x64\145\170\x20\x6d\145\x74\150\157\144\40\x72\165\156\56"; } public function CreateMigration($version = "\x32\60\x32\63\x30\x39\60\x32\x30\x30\x30\x30\60\x30") { goto npiUC; eSpXS: if ($this->migration->current() === FALSE) { goto TypoS; } goto WAV23; iiHLs: show_error($this->migration->error_string()); goto McoDX; McoDX: CU08N: goto MLQ_0; WAV23: echo "\124\150\x65\x20\x6d\151\147\162\141\x74\x69\157\x6e\x20\146\x69\154\x65\x20\150\x61\x73\40\145\x78\x65\x63\165\x74\x65\x64\40\x73\x75\143\x63\145\163\163\146\165\154\154\171\x2e"; goto BfcoO; QJ6Nk: TypoS: goto iiHLs; BfcoO: goto CU08N; goto QJ6Nk; npiUC: $this->load->library("\x6d\151\x67\162\x61\x74\151\x6f\156"); goto eSpXS; MLQ_0: } public function undoMigration($version = NULL) { goto y1HaU; MNeTR: if ($this->migration->version($penultimate)) { goto nlazu; } goto hyPPQ; ALWxt: if (isset($version) && !array_key_exists($version, $migrations)) { goto ypy9G; } goto h6aeJ; w8eeJ: R4Nh_: goto rss0z; u09Jg: echo "\x54\x68\x65\x20\x6d\151\147\162\141\x74\151\157\x6e\x20\167\x61\163\40\x75\156\144\x6f"; goto OGXwX; hyPPQ: echo "\x43\157\x75\154\144\156\134\xe2\x80\231\x74\x20\162\x6f\154\x6c\40\x62\x61\x63\x6b\x20\x74\150\145\40\x6d\151\x67\162\x61\x74\151\x6f\x6e\56"; goto QOpv5; yj__9: if (isset($version) && array_key_exists($version, $migrations) && $this->migration->version($version)) { goto A2P79; } goto ALWxt; L4aWZ: nlazu: goto oDtFP; yni2D: exit; goto HtHsJ; DysDG: foreach ($migrations as $key => $migration) { $migrationKeys[] = $key; peE8T: } goto KnRQs; V2mMZ: goto R4Nh_; goto BWYI1; Tzzi2: $migrations = $this->migration->find_migrations(); goto a02gu; HtHsJ: drPks: goto gIopz; QOpv5: exit; goto HUnF2; jQ_Uc: echo "\x54\150\145\40\x6d\x69\147\x72\x61\x74\151\x6f\x6e\40\167\151\x74\150\x20\x73\145\154\x65\x63\x74\x65\x64\40\166\145\162\163\x69\x6f\156\40\x64\x6f\145\163\x6e\342\200\231\x74\40\145\170\x69\163\164\56"; goto w8eeJ; OGXwX: exit; goto V2mMZ; HUnF2: goto drPks; goto L4aWZ; y1HaU: $this->load->library("\155\x69\147\162\141\x74\151\157\156"); goto Tzzi2; gIopz: goto R4Nh_; goto z6i0w; KnRQs: Uyt_b: goto yj__9; oDtFP: echo "\124\x68\145\40\x6d\151\x67\162\x61\164\151\x6f\156\x20\150\x61\x73\40\142\x65\x65\x6e\40\162\x65\166\145\x72\164\145\144\x20\x73\x75\143\x63\145\x73\163\x66\x75\154\154\171\56"; goto yni2D; z6i0w: A2P79: goto u09Jg; h6aeJ: $penultimate = sizeof($migrationKeys) == 1 ? 0 : $migrationKeys[sizeof($migrationKeys) - 2]; goto MNeTR; BWYI1: ypy9G: goto jQ_Uc; a02gu: $migrationKeys = array(); goto DysDG; rss0z: } public function resetMigration() { goto t8G7w; ZDxe5: if ($this->migration->current() !== FALSE) { goto KdD3j; } goto kVk8j; xtznt: t7O2r: goto ojQVt; t8G7w: $this->load->library("\x6d\x69\147\162\x61\x74\151\x6f\x6e"); goto ZDxe5; xd2e6: echo "\124\150\145\40\155\x69\x67\x72\141\164\151\157\x6e\40\x77\141\x73\40\x72\x65\166\x65\162\x74\x20\x74\157\x20\x74\150\145\x20\x76\x65\x72\x73\151\157\x6e\x20\163\x65\x74\x20\151\x6e\40\164\150\145\x20\143\157\x6e\x66\x69\x67\40\146\x69\x6c\145\56"; goto pRuti; kVk8j: echo "\x43\x6f\x75\x6c\144\156\134\342\200\x99\164\x20\162\145\x73\145\164\x20\x6d\151\147\162\x61\x74\x69\157\156\56"; goto sJTjQ; pRuti: return TRUE; goto xtznt; JjauO: exit; goto DgN2m; D7zSI: KdD3j: goto xd2e6; sJTjQ: show_error($this->migration->error_string()); goto JjauO; DgN2m: goto t7O2r; goto D7zSI; ojQVt: } function make_base() { $this->load->library("\143\x69\137\x6d\151\x67\162\x61\164\151\157\x6e\163\137\x67\x65\156\145\x72\x61\164\157\162\57\x53\161\x6c\164\157\x63\151"); $this->sqltoci->generate("\153\145\154\x61\163\137\x6a\141\x64\167\141\154\x5f\x6b\142\x6d"); } }
