import{o as b,c as g,a as n,t as S,C as c,u as a,l as C,G as y,Y as f,h}from"./js/runtime-dom.esm-bundler.h3clfjuw.js";import{c as P,b as x}from"./js/vue-router.eypfdvl5.js";import{l as v}from"./js/index.njux2kgl.js";import{l as E}from"./js/index.cw7tfyil.js";import{d as m,R as w,G as k,C as T,F as A,a6 as R,o as $}from"./js/index.lqcu3hi3.js";import{i as B}from"./js/isEqual.izz0yjhb.js";import"./js/translations.e22mvhfh.js";import{i as D,_ as V,s as L}from"./js/default-i18n.bz7purh4.js";import{_ as N}from"./js/App.i3mx0zbv.js";import{_ as O}from"./js/ScoreButton.erl7ixj3.js";import{S as G}from"./js/LogoGear.gxsz2m6s.js";import"./js/Caret.g6s6s7gs.js";import"./js/_plugin-vue_export-helper.oebm7xum.js";import"./js/cleanForSlug.etvx808q.js";import"./js/_baseIsEqual.btyep0ht.js";import"./js/_getTag.k19irihw.js";/* empty css                */import"./js/LicenseKeyBar.hoq3y8n1.js";import"./js/ScrollTo.ntqtkazp.js";import"./js/params.k8e95b6q.js";import"./js/allowed.cnz2h8ma.js";import"./js/constants.dnzd2kuo.js";import"./js/SettingsRow.d9u0swi1.js";import"./js/Row.h4gujlzc.js";import"./js/Checkbox.cv4w58s0.js";import"./js/Checkmark.d5kkjaf5.js";import"./js/Tabs.nyi4b4w1.js";import"./js/ProBadge.e32os6n3.js";import"./js/Information.djrr3pec.js";import"./js/Slide.dop8j51m.js";import"./js/Index.gtlvh3ar.js";import"./js/MaxCounts.bdkgkiti.js";import"./js/Tags.lgcgntse.js";import"./js/Ellipse.mhzh8c2h.js";import"./js/debounce.lmahs4m3.js";import"./js/toNumber.o3a8s20t.js";import"./js/toFinite.j57ptoa1.js";import"./js/TruSeoScore.he4e4jdf.js";import"./js/Tooltip.i4md1nj9.js";import"./js/Statistics.l9vto0az.js";import"./js/Plus.e1tf1dpc.js";import"./js/Eye.jbr17b06.js";import"./js/RadioToggle.cler7vn3.js";import"./js/GoogleSearchPreview.iw4vtoyb.js";import"./js/HtmlTagsEditor.b5rm37z5.js";import"./js/Editor.i8px02kg.js";import"./js/_baseClone.memmt1nf.js";import"./js/_arrayEach.n8ou32wp.js";import"./js/UnfilteredHtml.gvs5qb56.js";import"./js/popup.by9shv56.js";import"./js/license.md0nmssw.js";import"./js/upperFirst.d9alxexs.js";import"./js/Mobile.livanyta.js";import"./js/vue3-apexcharts.cwogygg0.js";import"./js/ConnectCta.oy9zv6h9.js";import"./js/GoogleSearchConsole.mrngyubh.js";import"./js/Index.bojstwek.js";import"./js/Blur.mu93d3e2.js";import"./js/Graph.bw9skznb.js";import"./js/numbers.oc93q9ut.js";import"./js/WpTable.ku0ajsnd.js";import"./js/Table.fw94frzs.js";import"./js/Download.cmimu09k.js";import"./js/RequiredPlans.l7pjpdqj.js";import"./js/addons.ds3c4v6r.js";import"./js/PostTypes.k189gg5t.js";import"./js/External.lyui8nzf.js";import"./js/InternalOutbound.gq4sspcu.js";import"./js/Image.mh6vskkn.js";import"./js/FacebookPreview.pblvb2yr.js";import"./js/Img.b8ktdwdi.js";import"./js/Profile.t9aiulue.js";import"./js/ImageUploader.ljgurrx5.js";import"./js/TwitterPreview.gaoeyz1f.js";import"./js/Book.f6lktglp.js";import"./js/Settings.cshbxeez.js";import"./js/Build.mjaxpub4.js";import"./js/Redirects.b9owhewb.js";import"./js/Index.mnx6c8l5.js";import"./js/JsonValues.g6ep3o3z.js";import"./js/Url.mx7n0tnd.js";import"./js/External.h5te4wqm.js";import"./js/escapeRegExp.n8evpyq8.js";import"./js/Exclamation.f0pmbpi9.js";import"./js/Gear.dx9icaxx.js";import"./js/date.cp76fgkd.js";import"./js/DatePicker.ns06gy6o.js";import"./js/Calendar.fbofsn3b.js";import"./js/pick.gnbqgz74.js";import"./js/Card.nubn9etl.js";import"./js/Upsell.ouqs5sgm.js";let d={};const l=()=>{const t={...d},o=w();B(t,o)||(d=o,k())},M=()=>{const t=T();t.saveCurrentPost(t.currentPost).then(()=>{A().fetch()})},U=()=>{TVE.add_action("tcb-ready",l),["tcb.after-insert","tcb.element.remove","tcb.element.duplicate","tcb.froala.focus","tcb.froala.blur","tcb.image.change","after_undo_redo"].forEach(t=>{TVE.add_action(t,()=>{m(l,200)})}),TVE.add_action("tve.save_post.success",()=>{m(M,100)})};let r=!1;const j=()=>{TVE.$("#sidebar-top, #aioseo-score-btn-settings").on("click",".aioseo-score-button",()=>{const t=document.querySelector(".tcb-sidebar-icon-aioseo"),o=new MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});t==null||t.dispatchEvent(o)}),TVE.$("#settings-action-btn").on("click",()=>{r=!r,TVE.$(".tcb-aioseo #settings-action-btn").toggleClass("active",r),TVE.$body.toggleClass("aioseo-settings-enabled",r),TVE.ajax("update_option","post",{option_name:"is_aioseo_settings_enabled",option_value:r}).done(()=>{})})},q=()=>{TVE.add_action("tcb.drawer.toggle",t=>{t==="settings"&&setTimeout(()=>{const o=TVE.$("#aioseo-panel"),e=TVE.$(".tcb-sidebar-icon-aioseo").hasClass("active");e?o.show():o.hide(),u(e)},100)}),TVE.add_action("tcb.drawer.hide",()=>{setTimeout(()=>{const t=TVE.$(".tcb-sidebar-icon-aioseo").hasClass("active");u(t)},110)})},u=t=>{TVE.$("#aioseo-score-btn-header .aioseo-score-button").toggleClass("aioseo-score-button--active",t),TVE.$body.toggleClass("aioseo-settings-active",t)},H=()=>{if(TVE.$("#aioseo-panel").length)return;const t=TVE.$(".settings"),o=TVE.$("<div>",{id:"aioseo-panel"}).hide();t.append(o)},W=()=>{if(TVE.$("#aioseo-score-btn-header").length)return;const t=TVE.$("#tcb-sidebar-top-right .button-group"),o=TVE.$("<div>",{id:"aioseo-score-btn-header"});t.append(o)},z=()=>{r=TVE.CONST.is_aioseo_settings_enabled==="true"||TVE.CONST.is_aioseo_settings_enabled==="1",r&&(TVE.$(".tcb-aioseo #settings-action-btn").addClass("active"),TVE.$body.addClass("aioseo-settings-enabled")),TVE.$("html").attr("dir",D()?"rtl":"ltr"),TVE.$("body").addClass("wp-core-ui"),H(),W(),q(),j()},s={id:"aioseo-limit-modified-date-thrive",param:"aioseo_limit_modified_date",title:V("Save (Don't Modify Date)","all-in-one-seo-pack"),flag:!1},F=()=>{TVE.$("#tve-save-dash-return").after(`
		<a
			href="javascript:void(0)"
			id="${s.id}"
			title="${s.title}"
		>
			${s.title}
		</a>
	`)},Y=()=>{TVE.add_filter("tcb_save_post_data_before",t=>(t[s.param]=s.flag,t)),TVE.add_action("tve.save_post.success",()=>{s.flag=!1}),TVE.$body.on("click",`#${s.id}`,()=>{s.flag=!0,TVE.main.editor_settings.save()})},I=()=>{F(),Y()},J={class:"edit-post-sidebar editor-sidebar aioseo-thrive-sidebar"},K={class:"aioseo-thrive-sidebar__header"},Q={class:"aioseo-thrive-sidebar__header-title"},X={class:"aioseo-thrive-sidebar__content"},_={__name:"Sidebar",setup(t){const e={headerTitle:L(V("%1$s Settings","all-in-one-seo-pack"),"AIOSEO")};return(i,p)=>(b(),g("div",J,[n("div",K,[n("div",Q,S(e.headerTitle),1)]),n("div",X,[c(a(N))])]))}},Z={class:"aioseo-thrive-score-button"},tt={__name:"Button",props:{buttonContext:{type:String}},setup(t){const{currentPost:o}=R(T());return(e,i)=>(b(),g("div",Z,[c(a(O),{score:a(o).seo_score,class:y([t.buttonContext==="Settings"?"aioseo-score-button--active":""])},{icon:C(()=>[c(a(G))]),_:1},8,["score","class"])]))}},ot=()=>{const t=P({history:x(),routes:[{path:"/",component:_}]});let o=f({name:"Standalone/ThriveArchitect",data(){return{tableContext:window.aioseo.currentPost.context,screenContext:"sidebar"}},render:()=>h(_)});o=v(o),o=E(o),o.use(t),t.app=o,$(o,t),o.mount("#aioseo-panel")},et=()=>{["aioseo-score-btn-settings","aioseo-score-btn-header"].forEach(o=>{const e=o.replace("aioseo-score-btn-","").replace(/^\w/,p=>p.toUpperCase());let i=f({name:`Standalone/ThriveArchitect/Score${e}`,render:()=>h(tt)},{buttonContext:e});i=v(i),i=E(i),$(i),i.mount(`#${o}`)})},it=()=>{z(),ot(),et(),I(),U()};it();