import{u as h,ad as k,A as p,_ as r,c as f,a as e,v as u,B as o,G as g,C as s,r as n,o as S}from"./index.CjtK8fPy.js";import{a as y,u as z}from"./SetupWizard.0d2DzUN_.js";import{C as B}from"./Index.CLMrFdFK.js";import{W as C,a as w,b as x}from"./Header.BztKSjO4.js";import{_ as b}from"./dynamic-import-helper.romy90V3.js";import"./LicenseUpgrade.C-8beXZw.js";import"./LicenseStore.BvU1D1z9.js";import"./datetime.B-a1af0c.js";import"./Close.BEWa5zQd.js";import"./Button.B-46FQMb.js";import"./Logo.BIJLH6vJ.js";const i="aioseo-broken-link-checker",W={setup(){const{strings:a}=y();return{composableStrings:a,rootStore:h(),setupWizardStore:z()}},components:{CommonLicense:B,WizardBody:C,WizardContainer:w,WizardHeader:x},data(){return{stage:"connect",strings:k({connectYourSite:p(r("Connect Your Site with %1$s",i),"Broken Link Checker"),description:p(r("Before you can start using %1$s, you need to connect the plugin to your account.",i),"Broken Link Checker"),goBack:r("Go to the Broken Links Report",i)},this.composableStrings)}},mounted(){this.setupWizardStore.currentStage=this.stage}},L={class:"aioseo-wizard-license-key"},v={class:"header"},A={class:"description"},N={class:"aioseo-go-back"},R=["href"],V=["href"];function Y(a,G,D,c,t,E){const d=n("wizard-header"),_=n("common-license"),l=n("wizard-body"),m=n("wizard-container");return S(),f("div",L,[e(d),e(m,null,{default:u(()=>[e(l,null,{default:u(()=>[o("div",v,s(t.strings.connectYourSite),1),o("div",A,s(t.strings.description),1),e(_,{isSetupWizard:""})]),_:1})]),_:1}),o("div",N,[o("a",{href:c.rootStore.aioseoBrokenLinkChecker.urls.home+"/wp-admin/index.php?page=broken-link-checker#/settings",class:"no-underline"},"←",8,R),g("   "),o("a",{href:c.rootStore.aioseoBrokenLinkChecker.urls.home+"/wp-admin/index.php?page=broken-link-checker#/settings"},s(t.strings.goBack),9,V)])])}const M=b(W,[["render",Y]]);export{M as default};