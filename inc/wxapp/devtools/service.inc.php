<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator          |
    |              on 2018-06-22 20:39:37              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 goto bVcWv; li3vI: a3UZC: goto KNGeo; bVcWv: defined("\111\x4e\x5f\111\101") or exit("\101\x63\143\145\163\x73\40\x44\x65\x6e\151\x65\144"); goto yFEJp; VYazc: $op = in_array($_GPC["\x6f\160"], $ops) ? $_GPC["\157\160"] : "\x73\x65\162\x76\151\x63\x65"; goto nEcbR; Fvwq5: $uniacid = $_W["\x75\x6e\151\141\143\x69\x64"]; goto VYazc; aOnmj: global $_GPC, $_W; goto Fvwq5; nEcbR: switch ($op) { case "\163\x65\162\x76\x69\x63\x65\137\143\x6c\x61\163\x73": goto B3zMp; hTmBX: if ($request) { goto i0crk; } goto axmeP; K1oQB: PpbbQ: goto J5oLw; B3zMp: $request = pdo_getall("\x78\143\x5f\164\162\141\151\x6e\137\x73\145\x72\x76\x69\143\145\x5f\143\154\x61\x73\x73", array("\x73\x74\141\x74\165\163" => 1, "\x75\x6e\x69\141\143\x69\x64" => $uniacid), array(), '', "\163\x6f\162\164\40\x44\x45\x53\103\54\143\162\x65\x61\x74\145\x74\x69\155\x65\40\104\x45\x53\x43"); goto hTmBX; pqoA5: return $this->result(0, "\346\223\x8d\xe4\275\234\xe6\210\220\xe5\x8a\237", $request); goto K1oQB; J5oLw: goto FJrwa; goto GK4TP; ONuOC: goto PpbbQ; goto C6lag; C6lag: i0crk: goto pqoA5; axmeP: return $this->result(0, "\346\223\x8d\xe4\275\x9c\xe5\xa4\xb1\xe8\264\xa5"); goto ONuOC; GK4TP: case "\x73\x65\x72\166\151\x63\x65": goto WJEI1; sB6b5: dWhXX: goto wr7y9; AXR1n: $condition["\143\x69\144"] = $_GPC["\x63\x69\x64"]; goto hvs8G; Ym0Sn: $condition["\164\165\151"] = 1; goto Dhhgs; JpXtO: if (empty($_GPC["\x63\151\144"])) { goto ktS60; } goto AXR1n; lMQSY: return $this->result(0, "\346\x93\215\xe4\275\234\xe6\x88\220\345\x8a\237", $request); goto Nn77z; FuCPy: h4Uz5: goto lMQSY; Nn77z: tCJR1: goto PhTVJ; Dhhgs: POjmJ: goto RL_vW; zGfuN: return $this->result(0, "\346\223\215\344\xbd\x9c\345\244\xb1\xe8\264\245"); goto ihfzS; WJEI1: $condition["\x75\x6e\x69\x61\x63\x69\x64"] = $uniacid; goto Rtw6r; wr7y9: foreach ($request as &$x) { $x["\142\151\x6d\x67"] = tomedia($x["\142\151\x6d\x67"]); T8wqu: } goto FuCPy; RL_vW: $request = pdo_getall("\170\x63\137\x74\162\x61\151\156\x5f\x73\x65\x72\x76\x69\x63\145", $condition, array(), '', "\x73\157\x72\164\40\x44\105\123\x43\x2c\143\162\x65\x61\164\x65\164\151\x6d\145\40\104\105\x53\x43", array($_GPC["\160\x61\x67\145"], $_GPC["\160\141\147\145\x73\151\x7a\145"])); goto oqJpa; PhTVJ: goto FJrwa; goto vCB0Z; Avx9r: if (empty($_GPC["\164\x75\151"])) { goto POjmJ; } goto Ym0Sn; hvs8G: ktS60: goto Avx9r; ihfzS: goto tCJR1; goto sB6b5; Rtw6r: $condition["\x73\x74\141\164\165\x73"] = 1; goto JpXtO; oqJpa: if ($request) { goto dWhXX; } goto zGfuN; vCB0Z: case "\144\145\164\141\x69\x6c": goto H5UKB; P7Wi6: SwK7M: goto Ih6Ml; gECz4: $datalist = array(); goto PzSGz; m53wj: K5DzW: goto aOdVd; eiZf3: if (!$zan) { goto anO7P; } goto MVQp2; OCyA5: if ($request) { goto K5DzW; } goto ouY_2; YWSio: foreach ($teacher as $t) { $datalist[$t["\151\x64"]] = $t; Mb9H1: } goto FZuLB; DS7ar: $request["\x69\163\137\x7a\x61\x6e"] = -1; goto JPqEm; MVQp2: $request["\x69\x73\137\172\141\156"] = 1; goto VB67U; PzSGz: if (!$teacher) { goto HWBzo; } goto YWSio; WY5Kk: F3NsK: goto SLkoD; R1sl9: foreach ($team as $key => $t) { goto WPjzb; d_cC3: uaC93: goto aTUCr; SRNRj: unset($team[$key]); goto d_cC3; qGBxK: unset($team[$key]); goto Zqwr1; WPjzb: if (!(time() > strtotime($t["\x65\x6e\144\137\164\151\155\145"]))) { goto uaC93; } goto SRNRj; aTUCr: if (!(intval($t["\x6d\x65\155\142\x65\x72"]) >= intval($t["\155\x6f\x72\x65\x5f\x6d\145\155\142\145\x72"]))) { goto NcMCa; } goto qGBxK; Zqwr1: NcMCa: goto o9PhM; o9PhM: RX1zp: goto ylOkK; ylOkK: } goto P7Wi6; Ih6Ml: if (empty($team)) { goto EEjTT; } goto xFK24; aOdVd: pdo_update("\x78\x63\137\164\162\x61\x69\156\137\x73\145\162\166\151\143\x65", array("\x63\x6c\x69\143\x6b" => intval($request["\143\x6c\x69\143\153"]) + 1), array("\165\156\151\141\x63\151\144" => $uniacid, "\163\164\x61\x74\165\163" => 1, "\151\x64" => $_GPC["\x69\x64"])); goto hbQU0; FZuLB: yJ81a: goto StSDi; mqIf0: $request["\x63\x6c\151\143\153"] = intval($request["\143\154\x69\x63\153"]) + 1; goto bSmgD; TP1O0: LeAMi: goto hJLQm; GkWqv: BjZJz: goto ZaeXb; NMpjh: $request["\164\145\141\143\150\145\162"] = json_decode($request["\164\x65\x61\x63\150\145\162"], true); goto opEpC; sQqZ2: if (empty($request["\164\x65\x61\x63\150\x65\162"])) { goto vQWXP; } goto NMpjh; q1ZpY: foreach ($request["\x74\x65\141\143\x68\x65\162"] as &$x) { goto zUKwa; WNqnA: $x["\x73\151\155\147"] = tomedia($datalist[$x["\151\x64"]]["\163\x69\155\x67"]); goto ZtwfR; zUKwa: $x["\x6e\141\x6d\145"] = $datalist[$x["\x69\x64"]]["\x6e\141\x6d\x65"]; goto WNqnA; ZtwfR: ULcuh: goto i8K76; i8K76: } goto FbBAd; GVQr7: $request["\164\x65\x61\x6d"] = array(); goto ntGXW; SLkoD: return $this->result(0, "\346\x93\215\344\xbd\234\xe6\210\x90\345\212\237", $request); goto GkWqv; ZaeXb: goto FJrwa; goto z0KP5; xFK24: $request["\164\x65\x61\x6d"] = $team; goto LDeJ_; Sf9H4: if (!$team) { goto LeAMi; } goto R1sl9; T5haS: goto BjZJz; goto m53wj; opEpC: $teacher = pdo_getall("\170\x63\x5f\x74\x72\x61\x69\156\137\164\x65\141\143\x68\145\162", array("\163\x74\141\x74\x75\163" => 1, "\165\156\x69\x61\143\x69\x64" => $uniacid)); goto gECz4; ntGXW: $team = pdo_getall("\170\143\137\164\x72\141\151\x6e\137\163\145\162\x76\x69\143\x65\x5f\164\x65\141\x6d", array("\x73\164\x61\164\x75\163" => 1, "\x70\x69\144" => $request["\x69\144"], "\165\x6e\x69\x61\143\151\x64" => $uniacid), array(), '', "\143\x72\145\x61\164\145\x74\151\155\x65\x20\104\105\x53\x43"); goto Sf9H4; Xm4fK: $zan = pdo_get("\x78\x63\137\x74\162\141\x69\156\x5f\172\x61\x6e", array("\163\x74\141\x74\x75\163" => 1, "\x6f\x70\x65\x6e\x69\144" => $_W["\x6f\160\145\x6e\x69\144"], "\x75\x6e\151\141\x63\151\144" => $uniacid, "\x63\x69\x64" => $request["\x69\x64"])); goto eiZf3; LDeJ_: EEjTT: goto TP1O0; hbQU0: $request["\x62\151\x6d\147"] = tomedia($request["\x62\x69\155\x67"]); goto mqIf0; H5UKB: $request = pdo_get("\170\143\x5f\x74\162\x61\x69\156\x5f\x73\x65\162\166\151\x63\x65", array("\x75\156\151\141\x63\151\x64" => $uniacid, "\163\x74\141\164\x75\x73" => 1, "\x69\144" => $_GPC["\x69\x64"])); goto OCyA5; FbBAd: EIlka: goto GVQr7; JPqEm: if (empty($_W["\157\x70\x65\156\151\x64"])) { goto F3NsK; } goto Xm4fK; bSmgD: $request["\x63\x6f\x6e\164\x65\156\x74\x32"] = htmlspecialchars_decode($request["\x63\x6f\156\x74\x65\156\x74\x32"]); goto sQqZ2; hJLQm: vQWXP: goto DS7ar; ouY_2: return $this->result(0, "\346\223\x8d\344\xbd\234\xe5\xa4\xb1\350\xb4\xa5"); goto T5haS; StSDi: HWBzo: goto q1ZpY; VB67U: anO7P: goto WY5Kk; z0KP5: case "\156\145\x77\163": goto g3Q8j; Yzgib: gGoz6: goto bzmTC; kZ6Fc: if ($request) { goto gGoz6; } goto i5gYK; i5gYK: return $this->result(0, "\xe6\223\x8d\344\275\x9c\345\244\261\350\264\245"); goto IKISo; g3Q8j: $request = pdo_getall("\x78\143\x5f\164\x72\x61\151\156\x5f\x6e\x65\167\x73", array("\163\x74\x61\164\x75\163" => 1, "\x75\x6e\x69\x61\x63\x69\x64" => $uniacid), array(), '', "\x73\x6f\x72\x74\x20\104\105\x53\x43\x2c\x63\162\x65\x61\x74\145\x74\151\155\x65\x20\104\x45\x53\103", array($_GPC["\160\141\147\145"], $_GPC["\x70\x61\x67\x65\163\x69\172\x65"])); goto kZ6Fc; UsPx_: return $this->result(0, "\346\223\x8d\xe4\275\x9c\xe6\x88\220\xe5\x8a\x9f", $request); goto w0oHc; w0oHc: YKTjG: goto J9mhR; J9mhR: goto FJrwa; goto Au0eP; IKISo: goto YKTjG; goto Yzgib; jcBcR: WwOIB: goto UsPx_; bzmTC: foreach ($request as &$x) { $x["\x73\151\x6d\x67"] = tomedia($x["\x73\151\x6d\147"]); LmuQ1: } goto jcBcR; Au0eP: case "\x74\145\x61\x63\150\145\x72": goto cP1B_; AHifC: foreach ($request as &$x) { $x["\x73\x69\155\x67"] = tomedia($x["\x73\151\x6d\x67"]); G8MjR: } goto R6bWD; S7Cuk: return $this->result(0, "\346\223\215\xe4\275\234\xe6\x88\220\xe5\212\237", $request); goto uUuLc; oPrtU: kgIk1: goto AHifC; cP1B_: $request = pdo_getall("\170\x63\137\x74\162\x61\151\x6e\x5f\164\x65\x61\143\x68\x65\x72", array("\163\164\141\x74\165\x73" => 1, "\x75\x6e\x69\141\x63\151\x64" => $uniacid), array(), '', "\163\x6f\x72\x74\40\104\105\x53\103\x2c\x63\x72\x65\x61\164\145\x74\x69\155\x65\40\104\x45\123\103", array($_GPC["\160\141\x67\x65"], $_GPC["\160\141\147\145\163\151\x7a\145"])); goto LXi3x; LXi3x: if ($request) { goto kgIk1; } goto S0N_n; R6bWD: F5SKW: goto S7Cuk; fKTMi: goto FJrwa; goto lkvGU; S0N_n: return $this->result(0, "\346\x93\215\xe4\xbd\234\345\xa4\xb1\350\264\245"); goto dlztp; dlztp: goto DYcAL; goto oPrtU; uUuLc: DYcAL: goto fKTMi; lkvGU: case "\x74\x65\x61\x63\150\x65\162\x5f\x64\145\164\141\151\154": goto MYpUD; Jxy0u: $request["\151\x73\x5f\x73\164\x75\x64\x65\x6e\x74"] = -1; goto I80lW; esEU1: ArdWh: goto faaEG; faaEG: goto FJrwa; goto yZyBY; kkhC1: return $this->result(0, "\346\x93\x8d\xe4\275\x9c\345\xa4\261\xe8\xb4\xa5"); goto PEdeB; VfJJo: $userinfo = pdo_getall("\x78\x63\x5f\164\x72\x61\151\156\x5f\x75\x73\x65\162\151\156\x66\x6f", array("\163\164\141\164\165\163" => 1)); goto XnPuY; hGSaY: $request["\155\145\x6d\142\145\x72"] = array(); goto DwZdj; XnPuY: $datalist = array(); goto PEAS9; bOESq: $request["\x6d\145\155\142\x65\162"] = $log; goto MDg8F; PiHvh: P73lM: goto AhSU3; JRvhH: $student = pdo_get("\x78\x63\137\x74\162\x61\151\156\x5f\x74\145\x61\143\150\x65\162\x5f\154\157\147", array("\x75\x6e\151\141\143\151\x64" => $uniacid, "\x6f\160\x65\x6e\x69\x64" => $_W["\157\x70\x65\x6e\x69\x64"], "\164\151\x64" => $request["\151\144"], "\163\x74\141\164\x75\x73" => 1)); goto YXR_6; Xf1om: lB2du: goto Bxa5K; MDg8F: SEtLS: goto F06d5; AhSU3: $zan = pdo_get("\170\x63\137\x74\x72\141\151\x6e\137\x74\x65\141\x63\150\145\162\137\154\157\x67", array("\165\x6e\x69\141\143\151\x64" => $uniacid, "\157\160\145\156\x69\x64" => $_W["\157\x70\145\x6e\151\144"], "\164\151\x64" => $request["\x69\144"], "\x73\x74\x61\164\165\x73" => 2)); goto YOG8N; pQxss: ynGgd: goto bOESq; Kad2L: G_skv: goto Evy4l; ITyHk: foreach ($log as &$l) { goto iJ2eF; vHqLR: KCT1h: goto VaSh1; iJ2eF: $l["\x61\166\x61\x74\x61\162"] = $datalist[$l["\157\x70\x65\156\151\144"]]["\x61\166\x61\164\141\162"]; goto fqk02; fqk02: $l["\x6e\x69\143\x6b"] = $datalist[$l["\157\160\145\156\151\x64"]]["\x6e\151\143\x6b"]; goto vHqLR; VaSh1: } goto pQxss; cO8Kp: oPBTV: goto ITyHk; DwZdj: $log = pdo_getall("\170\x63\137\x74\x72\x61\151\x6e\137\164\145\141\x63\150\x65\162\x5f\154\x6f\x67", array("\x75\x6e\151\141\x63\x69\144" => $uniacid, "\164\151\144" => $request["\x69\x64"], "\x73\x74\x61\164\165\163" => 1), array(), '', "\x63\162\x65\141\x74\x65\x74\151\x6d\x65\x20\104\105\123\103", array(1, 6)); goto D939v; PEAS9: foreach ($userinfo as $u) { $datalist[$u["\157\160\145\156\151\144"]] = $u; Cxqrq: } goto cO8Kp; FP9v_: $request["\151\x73\137\x73\164\x75\144\145\156\x74"] = 1; goto PiHvh; YXR_6: if (!$student) { goto P73lM; } goto FP9v_; DmpIm: if ($request) { goto G_skv; } goto kkhC1; PEdeB: goto ArdWh; goto Kad2L; pJE2P: $request["\x69\x73\137\172\x61\x6e"] = 1; goto b2vya; MYpUD: $request = pdo_get("\170\x63\137\x74\162\141\x69\156\x5f\164\145\x61\143\150\145\162", array("\165\156\x69\141\x63\x69\144" => $uniacid, "\x69\144" => $_GPC["\x69\144"])); goto DmpIm; Evy4l: $request["\x73\151\x6d\147"] = tomedia($request["\163\x69\155\x67"]); goto Jxy0u; D939v: if (!$log) { goto SEtLS; } goto VfJJo; b2vya: U2vlW: goto Xf1om; F06d5: if (empty($_W["\157\x70\x65\156\151\x64"])) { goto lB2du; } goto JRvhH; Bxa5K: return $this->result(0, "\xe6\223\215\344\xbd\x9c\xe6\x88\x90\xe5\212\x9f", $request); goto esEU1; YOG8N: if (!$zan) { goto U2vlW; } goto pJE2P; cCvb8: $request["\x63\x6f\156\x74\x65\x6e\164\x32"] = htmlspecialchars_decode($request["\x63\x6f\x6e\x74\145\x6e\164\x32"]); goto hGSaY; I80lW: $request["\x69\x73\x5f\172\x61\x6e"] = -1; goto cCvb8; yZyBY: case "\172\x61\x6e": goto kl4fu; zHr5b: if (!($_GPC["\x73\164\141\164\165\x73"] == 2)) { goto URIhq; } goto RQLHi; LuM7Y: if (!$teacher) { goto x5aER; } goto XSiVM; cmFH5: x5Vk0: goto Y08tx; iVaCx: if (!$log) { goto SKe6o; } goto WkJDi; pfPiM: Jlcqg: goto t5fRS; ANMsz: goto WaP2I; goto cmFH5; rEYfH: K8LtW: goto uEc12; t5fRS: goto FJrwa; goto aawE0; kYAmp: WaP2I: goto pfPiM; kl4fu: $log = pdo_get("\x78\x63\137\164\162\141\x69\156\137\164\x65\x61\x63\x68\145\x72\137\x6c\x6f\147", array("\x75\156\x69\141\143\151\x64" => $uniacid, "\x6f\x70\x65\x6e\x69\x64" => $_W["\x6f\x70\x65\156\151\x64"], "\164\151\x64" => $_GPC["\x69\144"], "\163\x74\x61\164\x75\x73" => $_GPC["\163\x74\x61\164\165\x73"])); goto iVaCx; OiKqM: $request = pdo_insert("\x78\143\x5f\x74\162\x61\151\x6e\137\164\x65\141\x63\x68\145\x72\137\x6c\157\147", array("\165\x6e\151\x61\143\151\144" => $uniacid, "\157\x70\145\156\x69\x64" => $_W["\157\x70\145\156\x69\x64"], "\x74\151\x64" => $_GPC["\151\144"], "\163\164\x61\164\x75\x73" => $_GPC["\x73\164\x61\164\x75\x73"])); goto nnfxg; Y08tx: $teacher = pdo_get("\170\x63\137\x74\162\141\151\156\x5f\164\x65\x61\x63\150\145\x72", array("\x75\x6e\x69\x61\143\x69\x64" => $uniacid, "\151\144" => $_GPC["\151\x64"])); goto LuM7Y; hEQNI: return $this->result(1, "\346\223\x8d\344\xbd\x9c\xe5\244\xb1\xe8\xb4\245"); goto ANMsz; XSiVM: if ($_GPC["\x73\164\141\164\x75\163"] == 1) { goto K8LtW; } goto zHr5b; nnfxg: if ($request) { goto x5Vk0; } goto hEQNI; yrvA2: goto Jlcqg; goto SU1EK; gjB2C: goto uwFqZ; goto rEYfH; WkJDi: return $this->result(1, "\xe6\x93\x8d\xe4\275\x9c\345\244\xb1\xe8\264\245"); goto yrvA2; cKESI: uwFqZ: goto jdNf1; RQLHi: pdo_update("\x78\x63\137\x74\162\141\151\x6e\x5f\164\x65\x61\143\x68\145\x72", array("\172\x61\156" => intval($teacher["\172\141\156"]) + 1), array("\165\156\151\x61\x63\151\x64" => $uniacid, "\151\x64" => $_GPC["\151\x64"])); goto dEpGI; tO3Zd: return $this->result(0, "\346\x93\x8d\xe4\xbd\234\xe6\210\220\345\x8a\237", array("\x73\164\141\164\x75\163" => 1)); goto kYAmp; SU1EK: SKe6o: goto OiKqM; jdNf1: x5aER: goto tO3Zd; uEc12: pdo_update("\170\143\137\x74\x72\x61\151\x6e\137\x74\145\141\x63\150\145\162", array("\163\x74\165\x64\x65\156\164\163" => intval($teacher["\163\164\x75\x64\145\x6e\164\x73"]) + 1), array("\165\156\x69\x61\x63\x69\144" => $uniacid, "\x69\x64" => $_GPC["\x69\x64"])); goto cKESI; dEpGI: URIhq: goto gjB2C; aawE0: case "\154\x69\x73\x74": goto dzeLL; tufHv: $pagesize = $_GPC["\160\141\147\145\x73\x69\x7a\x65"]; goto dkbg_; H8Gk1: foreach ($request as &$x) { goto J3edJ; ryoTN: $x["\142\x69\155\x67"] = tomedia($datalist[$x["\160\x69\x64"]]["\x62\151\x6d\147"]); goto R2ATR; wLT0O: $x["\153\x65\163\150\151"] = $datalist[$x["\x70\151\x64"]]["\x6b\145\x73\x68\x69"]; goto ryoTN; o18f7: Ykj6_: goto GRB_8; J3edJ: $x["\156\141\155\x65"] = $datalist[$x["\x70\151\144"]]["\156\141\x6d\145"]; goto wLT0O; R2ATR: $x["\x70\x72\151\143\145"] = $datalist[$x["\x70\x69\x64"]]["\x70\162\151\143\145"]; goto o18f7; GRB_8: } goto oUP8r; vhj4E: goto FJrwa; goto p8d8v; SnUmY: foreach ($service as $s) { $datalist[$s["\151\x64"]] = $s; ArGeZ: } goto gadSM; unqQD: $request = pdo_fetchall($sql, array("\x3a\x75\156\x69\x61\143\151\144" => $uniacid, "\72\x74\x79\x70\x65" => $_GPC["\x63\x75\x72\x72"], "\x3a\164\x69\x6d\x65\x73" => $date)); goto EfKv4; EfKv4: if ($request) { goto kOolB; } goto qQ1bZ; WTfB9: $page = ($_GPC["\x70\x61\x67\145"] - 1) * $_GPC["\160\x61\147\145\x73\x69\172\x65"]; goto tufHv; ZfDyr: $datalist = array(); goto M_Qmf; oUP8r: Z0lCx: goto mJj5z; TCoQF: X0ef4: goto H8Gk1; ucd1L: goto P4CX0; goto FAPFV; gadSM: rFnko: goto TCoQF; dzeLL: $date = time(); goto WTfB9; dkbg_: $sql = "\x53\105\x4c\x45\103\124\x20\x2a\x20\106\122\117\115\40" . tablename("\x78\x63\137\164\162\141\151\x6e\x5f\163\x65\162\x76\x69\143\x65\x5f\x74\x65\141\x6d") . "\x20\127\110\105\122\x45\40\x73\164\141\164\x75\x73\75\61\40\x41\x4e\x44\x20\165\156\x69\141\x63\151\x64\x3d\72\165\156\151\141\x63\x69\144\x20\x41\x4e\104\40\164\x79\160\x65\75\x3a\164\171\160\145\40\x41\x4e\x44\40\125\116\x49\130\137\124\111\x4d\x45\x53\x54\101\115\120\50\145\x6e\144\137\164\x69\x6d\x65\x29\x3e\x3a\x74\x69\155\145\x73\40\101\x4e\104\40\x6d\157\162\x65\x5f\x6d\145\155\x62\x65\162\x3e\x6d\145\x6d\142\x65\162\x20\x4f\122\x44\x45\122\x20\102\131\x20\x63\162\x65\x61\164\145\164\x69\155\x65\40\104\105\x53\x43\54\x69\x64\40\x44\105\123\x43\x20\x4c\x49\115\111\x54\x20{$page}\54{$pagesize}"; goto unqQD; qQ1bZ: return $this->result(0, "\xe6\223\215\xe4\xbd\234\345\xa4\xb1\350\264\xa5"); goto ucd1L; BE1t7: P4CX0: goto vhj4E; FAPFV: kOolB: goto AUoPp; M_Qmf: if (!$service) { goto X0ef4; } goto SnUmY; AUoPp: $service = pdo_getall("\170\143\137\x74\x72\141\151\156\x5f\x73\x65\x72\166\x69\143\x65", array("\163\x74\141\164\165\163" => 1, "\165\x6e\x69\141\143\151\x64" => $uniacid)); goto ZfDyr; mJj5z: return $this->result(0, "\346\x93\215\344\xbd\234\346\210\220\xe5\x8a\x9f", $request); goto BE1t7; p8d8v: case "\x64\x65\164\x61\151\x6c\137\172\141\x6e": goto NVqRG; IfV7P: goto FJrwa; goto Duccz; dn2U_: PtY9g: goto GTRwS; WMCH7: $request = pdo_insert("\x78\143\x5f\164\162\x61\x69\156\x5f\172\141\156", array("\x6f\160\x65\x6e\x69\x64" => $_W["\x6f\160\145\156\151\x64"], "\x75\x6e\151\x61\x63\151\x64" => $uniacid, "\143\x69\x64" => $_GPC["\151\144"], "\163\x74\x61\x74\x75\x73" => 1)); goto LlRS3; yDXsr: DsMCL: goto BxcJD; BxcJD: return $this->result(0, "\345\xb7\xb2\347\202\xb9\350\265\x9e"); goto KLDcF; NVqRG: $zan = pdo_get("\x78\x63\x5f\164\x72\x61\x69\156\137\x7a\x61\x6e", array("\x73\x74\141\x74\165\x73" => 1, "\157\x70\145\156\151\144" => $_W["\x6f\x70\145\156\x69\x64"], "\143\x69\x64" => $_GPC["\x69\x64"], "\x75\x6e\x69\x61\143\151\144" => $uniacid)); goto jbDE2; FIfSe: $service = pdo_get("\170\143\137\164\x72\141\151\156\137\163\x65\x72\166\x69\x63\145", array("\x73\164\141\x74\165\x73" => 1, "\x69\x64" => $_GPC["\x69\x64"], "\x75\156\151\141\x63\151\144" => $uniacid)); goto iawyV; iawyV: pdo_update("\170\x63\137\x74\162\141\151\x6e\x5f\163\145\x72\x76\151\x63\145", array("\x7a\141\x6e" => $service["\172\141\x6e"] + 1), array("\x73\x74\141\x74\x75\163" => 1, "\x69\x64" => $_GPC["\151\144"], "\x75\156\x69\x61\x63\x69\x64" => $uniacid)); goto y84fb; LlRS3: if ($request) { goto FYuXD; } goto L1m6z; L1m6z: return $this->result(0, "\346\223\x8d\344\275\234\xe5\xa4\xb1\350\xb4\xa5"); goto LdxU7; LdxU7: goto PtY9g; goto Rr2fF; GTRwS: goto h4nm9; goto yDXsr; y84fb: return $this->result(0, "\xe6\223\215\344\xbd\x9c\xe6\x88\x90\xe5\212\237", array("\163\x74\141\x74\165\163" => 1)); goto dn2U_; Rr2fF: FYuXD: goto FIfSe; jbDE2: if ($zan) { goto DsMCL; } goto WMCH7; KLDcF: h4nm9: goto IfV7P; Duccz: case "\166\151\144\x65\x6f\137\x63\154\141\163\x73": goto RWEOz; JMXLF: goto DP1r7; goto AOfiu; RWEOz: $request = pdo_getall("\x78\x63\x5f\x74\162\x61\151\156\x5f\166\x69\x64\145\157\137\x63\154\x61\x73\163", array("\163\x74\141\164\x75\x73" => 1, "\x75\156\151\x61\x63\x69\144" => $uniacid), array(), '', "\163\157\x72\164\40\104\x45\123\x43\x2c\143\x72\145\x61\x74\145\164\x69\155\x65\40\104\x45\x53\x43"); goto xzyvE; zXnM_: DP1r7: goto LEZWi; Q1K_M: return $this->result(0, "\xe6\x93\215\xe4\275\x9c\xe6\210\220\xe5\x8a\237", $request); goto zXnM_; xzyvE: if ($request) { goto rN1fv; } goto C1i9H; AOfiu: rN1fv: goto Q1K_M; LEZWi: goto FJrwa; goto lBZtm; C1i9H: return $this->result(0, "\xe6\223\x8d\344\275\x9c\345\xa4\261\xe8\264\245"); goto JMXLF; lBZtm: case "\x76\151\144\x65\157": goto K7hUo; p4IdK: sQWVY: goto mOLI6; Bq8FC: foreach ($request as &$x) { goto v_dxN; v_dxN: $x["\x76\151\x64\145\x6f"] = tomedia($x["\x76\151\x64\145\x6f"]); goto buGYP; a5PJO: kqVwU: goto q1R4z; WYSDb: $x["\x7a\141\x6e"] = $datalist[$x["\x74\x65\141\x63\x68\x65\x72\137\151\x64"]]["\172\141\156"]; goto a5PJO; buGYP: $x["\x62\151\x6d\x67"] = tomedia($x["\142\x69\155\x67"]); goto WYSDb; q1R4z: } goto p4IdK; uhQMk: kugBy: goto Bq8FC; LchfI: $teacher = pdo_getall("\x78\x63\137\x74\x72\141\x69\156\x5f\164\x65\141\x63\150\x65\x72", array("\x75\156\x69\141\143\151\x64" => $uniacid)); goto atu27; FJNsX: foreach ($teacher as $t) { $datalist[$t["\x69\x64"]] = $t; yK9my: } goto cXh9V; ezTQx: $condition["\160\x69\144"] = $_GPC["\163\145\162\166\x69\143\145"]; goto SL_qr; dbKSD: goto FJrwa; goto TnEUA; mnqZC: $condition["\x63\x69\x64"] = $_GPC["\x63\x69\144"]; goto VOAc1; CcU2A: rBsdl: goto QbDlW; RZAFP: goto kRZ9N; goto RMDWy; mOLI6: return $this->result(0, "\346\x93\215\344\275\x9c\346\x88\220\xe5\212\237", $request); goto X7unc; cXh9V: fAyxG: goto uhQMk; atu27: $datalist = array(); goto DmP8k; RMDWy: EXke1: goto LchfI; UBLIA: if (empty($_GPC["\151\144"])) { goto rBsdl; } goto aykdR; GWslu: $condition["\165\156\x69\141\x63\151\x64"] = $uniacid; goto EnVz9; PT4gU: if ($request) { goto EXke1; } goto w3yoP; X7unc: kRZ9N: goto dbKSD; EnVz9: if (empty($_GPC["\x63\x69\144"])) { goto Ifc28; } goto mnqZC; pYb8p: $request = pdo_getall("\x78\x63\137\164\162\141\151\156\x5f\x76\x69\x64\x65\157", $condition, array(), '', "\x73\x6f\x72\164\x20\x44\105\123\x43\54\x63\x72\x65\x61\164\x65\x74\x69\x6d\145\x20\104\x45\123\x43", array($_GPC["\x70\x61\147\145"], $_GPC["\160\x61\147\x65\x73\151\172\145"])); goto PT4gU; SL_qr: BQqJ9: goto pYb8p; aykdR: $condition["\x69\x64\x20\41\x3d"] = $_GPC["\151\144"]; goto CcU2A; QbDlW: if (empty($_GPC["\x73\145\x72\166\x69\x63\x65"])) { goto BQqJ9; } goto ezTQx; VOAc1: Ifc28: goto UBLIA; DmP8k: if (!$teacher) { goto kugBy; } goto FJNsX; K7hUo: $condition["\x73\164\x61\x74\x75\163"] = 1; goto GWslu; w3yoP: return $this->result(0, "\346\x93\215\344\275\x9c\345\xa4\261\xe8\264\245"); goto RZAFP; TnEUA: case "\x76\x69\x64\145\157\x5f\144\145\x74\141\x69\154": goto nm0x5; BXtup: $request["\x76\151\144\x65\157"] = tomedia($request["\166\151\144\x65\157"]); goto XCX5Y; MnwO4: dbXYX: goto i5Re1; TkTdC: return $this->result(0, "\346\223\x8d\xe4\xbd\234\345\244\xb1\xe8\264\xa5"); goto cw0x0; gZnwB: Z7kez: goto i9Ih3; CWirM: if (!$order) { goto dbXYX; } goto f7Cvf; Q1Mib: if (!$teacher) { goto AQtDm; } goto Mz8qn; Uua8q: AQtDm: goto SsBg4; dGYil: lgzGK: goto vAXUl; i5Re1: goto Z7kez; goto MdL1H; yihpu: $order = pdo_get("\x78\143\x5f\x74\x72\141\x69\x6e\137\x6f\x72\x64\145\162", array("\163\164\x61\164\x75\163" => 1, "\165\x6e\x69\141\143\151\144" => $uniacid, "\x70\x69\x64" => $request["\151\144"], "\157\x70\145\x6e\151\144" => $_W["\157\160\145\156\151\144"], "\x6f\162\x64\x65\162\x5f\164\171\160\145" => 3)); goto CWirM; aJAYy: $service_team = pdo_getall("\170\x63\137\164\x72\x61\x69\156\137\163\145\x72\x76\151\x63\145\137\164\145\141\x6d", array("\160\x69\x64" => $request["\160\151\x64"], "\x75\156\151\x61\143\x69\144" => $uniacid)); goto fz1TU; fz1TU: if (!$service_team) { goto ga8l1; } goto B9g4g; OCQp8: return $this->result(0, "\346\x93\215\344\xbd\x9c\346\x88\x90\345\x8a\x9f", $request); goto I3v5c; bvB9r: if ($request["\160\x72\151\x63\145"] == 0) { goto Qvylh; } goto yihpu; I3v5c: wr3rK: goto nv06h; MGYBM: $teacher = pdo_get("\170\x63\x5f\164\x72\141\151\x6e\x5f\x74\145\x61\143\150\145\162", array("\x69\x64" => $request["\164\x65\141\143\x68\x65\162\x5f\151\x64"], "\x75\156\151\141\x63\151\144" => $uniacid)); goto Q1Mib; S6Klo: foreach ($service_team as $s) { goto FcLnr; C2Ngo: sBy2c: goto X2P3t; zCxOS: if (!$service_order) { goto QniD4; } goto HZ9kX; HZ9kX: $request["\x69\x73\x5f\x62\165\x79"] = 1; goto e_HR7; e_HR7: QniD4: goto C2Ngo; cXqVu: $service_order = pdo_getall("\170\143\137\x74\162\x61\x69\156\x5f\157\162\144\145\162", array("\x73\164\141\164\165\163" => 1, "\165\156\x69\141\143\151\144" => $uniacid, "\x70\x69\x64\x20\111\116" => $pid, "\157\x70\145\156\151\144" => $_W["\157\x70\145\x6e\151\x64"], "\157\162\x64\145\162\x5f\x74\x79\160\145\40\111\116" => array(1, 2))); goto zCxOS; FcLnr: $pid[] = $s["\x69\144"]; goto cXqVu; X2P3t: } goto dGYil; i9Ih3: o3ynb: goto OCQp8; nv06h: goto FJrwa; goto sr3QX; B9g4g: $pid = array(); goto S6Klo; Mz8qn: $request["\172\x61\156"] = $teacher["\x7a\141\x6e"]; goto Uua8q; my63I: $request["\x63\157\x6e\x74\145\x6e\164"] = $service["\143\157\x6e\164\145\156\164"]; goto yhGmP; AzaSb: if (!$service) { goto Nw3IH; } goto HIjlK; vAXUl: ga8l1: goto fi0ON; LZFx7: $request["\x69\x73\137\x62\x75\171"] = 1; goto gZnwB; nm0x5: $request = pdo_get("\x78\x63\x5f\164\162\141\x69\x6e\x5f\166\151\x64\x65\157", array("\x73\164\141\x74\165\x73" => 1, "\151\x64" => $_GPC["\x69\x64"], "\165\156\151\x61\x63\151\x64" => $uniacid)); goto xSo36; xSo36: if ($request) { goto UxCZH; } goto TkTdC; yhGmP: Nw3IH: goto aJAYy; f7Cvf: $request["\x69\x73\137\142\x75\171"] = 1; goto MnwO4; SsBg4: $service = pdo_get("\170\143\x5f\164\162\141\x69\x6e\x5f\163\x65\162\166\x69\143\x65", array("\151\144" => $request["\160\x69\x64"], "\165\x6e\x69\141\x63\151\x64" => $uniacid)); goto AzaSb; QfA2h: $request["\151\163\x5f\142\165\171"] = -1; goto BXtup; XCX5Y: $request["\142\151\155\x67"] = tomedia($request["\x62\151\155\x67"]); goto MGYBM; MdL1H: Qvylh: goto LZFx7; fi0ON: if (!($request["\151\x73\137\142\165\171"] == -1)) { goto o3ynb; } goto bvB9r; cw0x0: goto wr3rK; goto Tv1nM; HIjlK: $request["\x73\x65\162\166\x69\x63\145\x5f\156\141\155\145"] = $service["\x6e\141\x6d\x65"]; goto my63I; Tv1nM: UxCZH: goto QfA2h; sr3QX: case "\x73\x69\147\x6e": goto ylzDj; Zm1go: if ($team) { goto YV0kj; } goto iAdli; zMrF9: YV0kj: goto IVfIY; vu19F: goto ffQuk; goto SLFzc; aLYpu: m_RR9: goto qacQp; ehF2v: goto FJrwa; goto Ub9sh; qacQp: foreach ($request as &$x) { $x["\156\x61\155\145"] = $datalist[$x["\x70\151\x64"]]["\x6e\x61\155\x65"]; vAMFv: } goto lTTX0; SLFzc: R0xNl: goto hLgUV; iZwxs: VuWHE: goto Z3jpW; cIabh: uX2Vp: goto t2GQK; Z3jpW: $date = time(); goto xGg23; hLgUV: $pid = array(); goto hyD1z; MzvfW: ffQuk: goto ehF2v; xGg23: $sql = "\x53\x45\x4c\105\103\x54\40\52\40\106\x52\117\x4d\x20" . tablename("\170\x63\137\164\x72\x61\x69\156\x5f\x73\145\162\166\151\x63\145\x5f\x74\x65\141\155") . "\40\127\110\x45\122\105\40\x73\x74\x61\164\165\163\x3d\61\x20\x41\116\104\40\x75\156\151\141\x63\151\144\x3d\72\x75\x6e\x69\x61\x63\x69\144\x20\x41\116\104\x20\125\116\111\130\x5f\124\111\115\105\123\x54\x41\x4d\x50\x28\x65\x6e\144\x5f\164\x69\x6d\145\x29\76\72\164\151\155\x65\x73\40\x41\x4e\x44\x20\155\157\x72\145\137\155\145\155\x62\x65\x72\76\x6d\x65\155\142\x65\x72\x20\117\122\104\x45\122\40\x42\131\40\x63\x72\x65\x61\164\x65\164\x69\x6d\x65\40\104\x45\x53\x43\x2c\151\x64\x20\x44\x45\123\103"; goto yoOLa; TslbC: $request = pdo_getall("\x78\143\x5f\164\x72\141\151\x6e\x5f\163\x65\x72\166\x69\143\145\x5f\x74\145\141\155", array("\163\164\x61\x74\165\163" => 1, "\x75\x6e\151\x61\143\x69\144" => $uniacid, "\x69\144\40\111\x4e" => $id, "\160\151\x64\x20\111\x4e" => $pid), array(), '', "\x63\162\x65\141\164\145\x74\x69\155\145\x20\104\105\123\103\x2c\151\144\x20\x44\105\x53\103", array($_GPC["\x70\x61\x67\x65"], $_GPC["\160\141\x67\145\163\151\x7a\145"])); goto uPMzA; IVfIY: $id = array(); goto vBps2; ylzDj: $service = pdo_getall("\170\143\x5f\164\162\141\x69\x6e\137\x73\x65\162\x76\x69\143\x65", array("\163\x74\141\164\x75\x73" => 1, "\x70\x72\x69\143\145\x20\x21\75" => '', "\165\x6e\151\141\143\151\x64" => $uniacid)); goto BXUN8; iAdli: return $this->result(0, "\346\x93\215\xe4\xbd\x9c\345\xa4\xb1\350\xb4\xa5"); goto BwWB2; t2GQK: NsM1l: goto MzvfW; VBvLC: StYzy: goto TslbC; BwWB2: goto NsM1l; goto zMrF9; vBps2: foreach ($team as $t) { $id[] = $t["\151\144"]; WNKGm: } goto VBvLC; lTTX0: eNUeQ: goto yy2RU; BXUN8: if ($service) { goto R0xNl; } goto G35SP; hyD1z: $datalist = array(); goto g_YJw; nM0fO: return $this->result(0, "\346\223\x8d\344\275\x9c\xe5\xa4\261\350\xb4\xa5"); goto FIaIS; yoOLa: $team = pdo_fetchall($sql, array("\x3a\165\x6e\151\141\143\x69\x64" => $uniacid, "\x3a\164\x69\x6d\x65\x73" => $date)); goto Zm1go; yy2RU: return $this->result(0, "\xe6\223\x8d\xe4\275\x9c\xe6\x88\x90\345\212\237", $request); goto cIabh; g_YJw: foreach ($service as $s) { goto WceBx; xO31w: $datalist[$s["\151\x64"]] = $s; goto aG8EK; aG8EK: on2yB: goto K2o9l; WceBx: $pid[] = $s["\151\144"]; goto xO31w; K2o9l: } goto iZwxs; FIaIS: goto uX2Vp; goto aLYpu; uPMzA: if ($request) { goto m_RR9; } goto nM0fO; G35SP: return $this->result(0, "\346\223\x8d\xe4\275\234\345\xa4\261\xe8\xb4\xa5"); goto vu19F; Ub9sh: } goto li3vI; yFEJp: $ops = array("\163\x65\162\166\x69\143\145\137\x63\x6c\141\163\x73", "\x73\145\x72\166\151\143\x65", "\x64\x65\x74\141\151\154", "\156\x65\x77\163", "\164\145\141\x63\150\145\x72", "\164\145\x61\143\150\x65\162\137\x64\145\164\x61\x69\154", "\x7a\141\156", "\x6c\151\x73\x74", "\x64\x65\164\141\x69\x6c\x5f\x7a\141\156", "\x76\x69\144\145\157\x5f\143\154\141\163\163", "\x76\151\x64\x65\157", "\x76\151\x64\145\x6f\x5f\x64\145\164\x61\151\x6c", "\x73\x69\x67\x6e"); goto aOnmj; KNGeo: FJrwa: