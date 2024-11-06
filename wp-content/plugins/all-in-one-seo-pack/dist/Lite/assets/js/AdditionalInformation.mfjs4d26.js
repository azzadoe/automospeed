import{j as P,u as x,h as L,v as R}from"./index.lqcu3hi3.js";import{u as U}from"./Wizard.h4rvvy8r.js";import{B as A}from"./Phone.h4hcjly3.js";import{B as D}from"./RadioToggle.cler7vn3.js";import{C as B}from"./HtmlTagsEditor.b5rm37z5.js";import{C as J}from"./ImageUploader.ljgurrx5.js";import{C as G}from"./SocialProfiles.foiopmea.js";import{W as H,a as E,b as M}from"./Header.gqph74dt.js";import{W as T}from"./CloseAndExit.jr72srk1.js";import{_ as j}from"./Steps.5rpmumwh.js";import"./translations.e22mvhfh.js";import{_ as Y}from"./_plugin-vue_export-helper.oebm7xum.js";import{_ as l}from"./default-i18n.bz7purh4.js";import{c as p,C as s,l as u,v as m,o as c,a as o,x as h,t as r,b as g,G as q}from"./runtime-dom.esm-bundler.h3clfjuw.js";import"./cleanForSlug.etvx808q.js";import"./addons.ds3c4v6r.js";import"./upperFirst.d9alxexs.js";import"./preload-helper.vvws7ueq.js";import"./Editor.i8px02kg.js";import"./isEqual.izz0yjhb.js";import"./_baseIsEqual.btyep0ht.js";import"./_getTag.k19irihw.js";import"./_baseClone.memmt1nf.js";import"./_arrayEach.n8ou32wp.js";import"./index.cw7tfyil.js";import"./Caret.g6s6s7gs.js";import"./UnfilteredHtml.gvs5qb56.js";import"./constants.dnzd2kuo.js";import"./Img.b8ktdwdi.js";import"./Plus.e1tf1dpc.js";import"./Checkbox.cv4w58s0.js";import"./Checkmark.d5kkjaf5.js";import"./Textarea.gulsuctc.js";import"./SettingsRow.d9u0swi1.js";import"./Row.h4gujlzc.js";import"./Facebook.ocagzcrv.js";import"./Twitter.k05mazyy.js";import"./Logo.nueehhao.js";import"./Index.gtlvh3ar.js";const d="all-in-one-seo-pack",F={setup(){const{strings:t}=U({stage:"additional-information"});return{optionsStore:P(),rootStore:x(),setupWizardStore:L(),composableStrings:t}},components:{BasePhone:A,BaseRadioToggle:D,CoreHtmlTagsEditor:B,CoreImageUploader:J,CoreSocialProfiles:G,WizardBody:H,WizardCloseAndExit:T,WizardContainer:E,WizardHeader:M,WizardSteps:j},data(){return{showOtherSocialNetworks:!1,loaded:!1,loading:!1,strings:R(this.composableStrings,{additionalSiteInformation:l("Additional Site Information",d),personOrOrganization:l("Person or Organization",d),choosePerson:l("Choose a Person",d),person:l("Person",d),organization:l("Organization",d),personOrOrganizationDescription:l("Choose whether the site represents a person or an organization.",d),name:l("Name",d),organizationName:l("Organization Name",d),organizationDescription:l("Organization Description",d),phone:l("Phone Number",d),logo:l("Logo",d),defaultSocialShareImage:l("Default Social Share Image",d),yourSocialProfiles:l("Your Social Profiles",d),showMore:l("Show more",d)})}},watch:{"optionsStore.options.social.profiles":{deep:!0,handler(t){this.setupWizardStore.additionalInformation.social.profiles=t}}},computed:{users(){return[{label:l("Manually Enter Person",d),value:"manual"}].concat(this.rootStore.aioseo.users.map(t=>({label:`${t.displayName} (${t.email})`,gravatar:t.gravatar,value:t.id})))}},methods:{getPersonOptions(t){return this.users.find(i=>i.value===t)},saveAndContinue(){this.loading=!0,this.setupWizardStore.saveWizard("additionalInformation").then(()=>{this.$router.push(this.setupWizardStore.getNextLink)})},showHideOtherSocialNetworks(){this.showOtherSocialNetworks=!this.showOtherSocialNetworks}},beforeMount(){const t=JSON.parse(JSON.stringify(this.optionsStore.options.searchAppearance)),i=JSON.parse(JSON.stringify(this.optionsStore.options.social));this.setupWizardStore.additionalInformation.social.profiles=JSON.parse(JSON.stringify(i.profiles)),this.setupWizardStore.additionalInformation.socialShareImage=i.facebook.general.defaultImagePosts,this.setupWizardStore.additionalInformation.siteRepresents=t.global.schema.siteRepresents,this.setupWizardStore.additionalInformation.person=t.global.schema.person,this.setupWizardStore.additionalInformation.organizationName=t.global.schema.organizationName,this.setupWizardStore.additionalInformation.organizationDescription=t.global.schema.organizationDescription,this.setupWizardStore.additionalInformation.organizationLogo=t.global.schema.organizationLogo,this.setupWizardStore.additionalInformation.personName=t.global.schema.personName,this.setupWizardStore.additionalInformation.personLogo=t.global.schema.personLogo,this.setupWizardStore.additionalInformation.phone=t.global.schema.phone,this.loaded=!0}},K={class:"aioseo-wizard-additional-information"},Q={class:"header"},X={class:"person-or-organization aioseo-settings-row no-border no-margin"},Z={class:"settings-name"},$={class:"name small-margin"},oo={class:"aioseo-description"},eo={key:0,class:"aioseo-settings-row no-border no-margin"},ao={class:"settings-name"},io={class:"name small-margin"},to={class:"person-label"},no={key:0,class:"person-avatar"},so=["src"],ro={class:"person-name"},lo={class:"person-label"},mo={key:0,class:"person-avatar"},po=["src"],co={class:"person-name"},go={key:1,class:"schema-graph-name aioseo-settings-row no-border no-margin"},uo={class:"settings-name"},_o={class:"name small-margin"},ho={key:2,class:"schema-graph-name aioseo-settings-row no-border no-margin"},fo={class:"settings-name"},zo={class:"name small-margin"},So={key:3,class:"schema-graph-name aioseo-settings-row no-border no-margin"},vo={class:"settings-name"},Wo={class:"name small-margin"},Io={key:4,class:"schema-graph-phone aioseo-settings-row no-border no-margin"},bo={class:"settings-name"},wo={class:"name small-margin"},ko={key:5,class:"schema-graph-image aioseo-settings-row no-border no-margin"},No={class:"settings-name"},Vo={class:"name small-margin"},yo={key:6,class:"schema-graph-image aioseo-settings-row no-border no-margin"},Oo={class:"settings-name"},Co={class:"name small-margin"},Po={class:"schema-graph-image aioseo-settings-row"},xo={class:"settings-name"},Lo={class:"name small-margin"},Ro={class:"header social"},Uo={class:"go-back"},Ao=o("div",{class:"spacer"},null,-1);function Do(t,i,Bo,e,n,_){const v=m("wizard-header"),W=m("wizard-steps"),I=m("base-radio-toggle"),b=m("base-select"),z=m("core-html-tags-editor"),w=m("base-input"),k=m("base-phone"),f=m("core-image-uploader"),N=m("core-social-profiles"),S=m("router-link"),V=m("base-button"),y=m("wizard-body"),O=m("wizard-close-and-exit"),C=m("wizard-container");return c(),p("div",K,[s(v),s(C,null,{default:u(()=>[s(y,null,{footer:u(()=>[o("div",Uo,[s(S,{to:e.setupWizardStore.getPrevLink,class:"no-underline"},{default:u(()=>[h("←")]),_:1},8,["to"]),h("   "),s(S,{to:e.setupWizardStore.getPrevLink},{default:u(()=>[h(r(n.strings.goBack),1)]),_:1},8,["to"])]),Ao,s(V,{type:"blue",loading:n.loading,onClick:_.saveAndContinue},{default:u(()=>[h(r(n.strings.saveAndContinue)+" →",1)]),_:1},8,["loading","onClick"])]),default:u(()=>[s(W),o("div",Q,r(n.strings.additionalSiteInformation),1),o("div",X,[o("div",Z,[o("div",$,r(n.strings.personOrOrganization),1)]),s(I,{modelValue:e.setupWizardStore.additionalInformation.siteRepresents,"onUpdate:modelValue":i[0]||(i[0]=a=>e.setupWizardStore.additionalInformation.siteRepresents=a),name:"siteRepresents",options:[{label:n.strings.person,value:"person"},{label:n.strings.organization,value:"organization"}]},null,8,["modelValue","options"]),o("div",oo,r(n.strings.personOrOrganizationDescription),1)]),e.setupWizardStore.additionalInformation.siteRepresents==="person"?(c(),p("div",eo,[o("div",ao,[o("div",io,r(n.strings.choosePerson),1)]),s(b,{class:"person-chooser",options:_.users,modelValue:_.getPersonOptions(e.setupWizardStore.additionalInformation.person),"onUpdate:modelValue":i[1]||(i[1]=a=>e.setupWizardStore.additionalInformation.person=a.value)},{singleLabel:u(({option:a})=>[o("div",to,[a.gravatar?(c(),p("div",no,[o("img",{alt:"User Gravatar",src:a.gravatar},null,8,so)])):g("",!0),o("div",ro,r(a.label),1)])]),option:u(({option:a})=>[o("div",lo,[a.gravatar?(c(),p("div",mo,[o("img",{alt:"User Gravatar",src:a.gravatar},null,8,po)])):g("",!0),o("div",co,r(a.label),1)])]),_:1},8,["options","modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",go,[o("div",uo,[o("div",_o,r(n.strings.organizationName),1)]),s(z,{modelValue:e.setupWizardStore.additionalInformation.organizationName,"onUpdate:modelValue":i[2]||(i[2]=a=>e.setupWizardStore.additionalInformation.organizationName=a),"line-numbers":!1,"tags-context":"knowledgeGraph","default-tags":["site_title"]},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",ho,[o("div",fo,[o("div",zo,r(n.strings.organizationDescription),1)]),s(z,{modelValue:e.setupWizardStore.additionalInformation.organizationDescription,"onUpdate:modelValue":i[3]||(i[3]=a=>e.setupWizardStore.additionalInformation.organizationDescription=a),"line-numbers":!1,description:"","tags-context":"knowledgeGraph","default-tags":["tagline"]},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents!=="organization"&&e.setupWizardStore.additionalInformation.person==="manual"?(c(),p("div",So,[o("div",vo,[o("div",Wo,r(n.strings.name),1)]),s(w,{size:"medium",modelValue:e.setupWizardStore.additionalInformation.personName,"onUpdate:modelValue":i[4]||(i[4]=a=>e.setupWizardStore.additionalInformation.personName=a)},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",Io,[o("div",bo,[o("div",wo,r(n.strings.phone),1)]),s(k,{modelValue:e.setupWizardStore.additionalInformation.phone,"onUpdate:modelValue":i[5]||(i[5]=a=>e.setupWizardStore.additionalInformation.phone=a)},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents==="organization"?(c(),p("div",ko,[o("div",No,[o("div",Vo,r(n.strings.logo),1)]),s(f,{modelValue:e.setupWizardStore.additionalInformation.organizationLogo,"onUpdate:modelValue":i[6]||(i[6]=a=>e.setupWizardStore.additionalInformation.organizationLogo=a)},null,8,["modelValue"])])):g("",!0),e.setupWizardStore.additionalInformation.siteRepresents!=="organization"&&e.setupWizardStore.additionalInformation.person==="manual"?(c(),p("div",yo,[o("div",Oo,[o("div",Co,r(n.strings.logo),1)]),s(f,{modelValue:e.setupWizardStore.additionalInformation.personLogo,"onUpdate:modelValue":i[7]||(i[7]=a=>e.setupWizardStore.additionalInformation.personLogo=a)},null,8,["modelValue"])])):g("",!0),o("div",Po,[o("div",xo,[o("div",Lo,r(n.strings.defaultSocialShareImage),1)]),s(f,{modelValue:e.setupWizardStore.additionalInformation.socialShareImage,"onUpdate:modelValue":i[8]||(i[8]=a=>e.setupWizardStore.additionalInformation.socialShareImage=a)},null,8,["modelValue"])]),o("div",Ro,r(n.strings.yourSocialProfiles),1),n.loaded?(c(),p("div",{key:7,class:q(["social-profiles",{"show-more":n.showOtherSocialNetworks}])},[s(N,{leftSize:"4",rightSize:"8",sameUsernameWidth:"4",hideAdditionalProfiles:""}),o("a",{class:"show-more-link aioseo-col col-md-offset-4",onClick:i[9]||(i[9]=(...a)=>_.showHideOtherSocialNetworks&&_.showHideOtherSocialNetworks(...a))},r(n.strings.showMore),1)],2)):g("",!0)]),_:1}),s(O)]),_:1})])}const we=Y(F,[["render",Do]]);export{we as default};