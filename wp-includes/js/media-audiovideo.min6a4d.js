/*! This file is auto-generated */
!function(){var i={6045:function(e){var t=wp.media.controller.State,i=wp.media.view.l10n,i=t.extend({defaults:{id:"audio-details",toolbar:"audio-details",title:i.audioDetailsTitle,content:"audio-details",menu:"audio-details",router:!1,priority:60},initialize:function(e){this.media=e.media,t.prototype.initialize.apply(this,arguments)}});e.exports=i},580:function(e){var t=wp.media.controller.State,i=wp.media.view.l10n,i=t.extend({defaults:{id:"video-details",toolbar:"video-details",title:i.videoDetailsTitle,content:"video-details",menu:"video-details",router:!1,priority:60},initialize:function(e){this.media=e.media,t.prototype.initialize.apply(this,arguments)}});e.exports=i},6615:function(e){var t=Backbone.Model.extend({initialize:function(){this.attachment=!1},setSource:function(e){this.attachment=e,this.extension=e.get("filename").split(".").pop(),this.get("src")&&this.extension===this.get("src").split(".").pop()&&this.unset("src"),_.contains(wp.media.view.settings.embedExts,this.extension)?this.set(this.extension,this.attachment.get("url")):this.unset(this.extension)},changeAttachment:function(e){this.setSource(e),this.unset("src"),_.each(_.without(wp.media.view.settings.embedExts,this.extension),function(e){this.unset(e)},this)}});e.exports=t},1764:function(e){var t=wp.media.view.MediaDetails,i=t.extend({className:"audio-details",template:wp.template("audio-details"),setMedia:function(){var e=this.$(".wp-audio-shortcode");return e.find("source").length?(e.is(":hidden")&&e.show(),this.media=t.prepareSrc(e.get(0))):(e.hide(),this.media=!1),this}});e.exports=i},5262:function(e){var t=wp.media.view.MediaFrame.MediaDetails,i=wp.media.controller.MediaLibrary,a=wp.media.view.l10n,s=t.extend({defaults:{id:"audio",url:"",menu:"audio-details",content:"audio-details",toolbar:"audio-details",type:"link",title:a.audioDetailsTitle,priority:120},initialize:function(e){e.DetailsView=wp.media.view.AudioDetails,e.cancelText=a.audioDetailsCancel,e.addText=a.audioAddSourceTitle,t.prototype.initialize.call(this,e)},bindHandlers:function(){t.prototype.bindHandlers.apply(this,arguments),this.on("toolbar:render:replace-audio",this.renderReplaceToolbar,this),this.on("toolbar:render:add-audio-source",this.renderAddSourceToolbar,this)},createStates:function(){this.states.add([new wp.media.controller.AudioDetails({media:this.media}),new i({type:"audio",id:"replace-audio",title:a.audioReplaceTitle,toolbar:"replace-audio",media:this.media,menu:"audio-details"}),new i({type:"audio",id:"add-audio-source",title:a.audioAddSourceTitle,toolbar:"add-audio-source",media:this.media,menu:!1})])}});e.exports=s},6445:function(e){var t=wp.media.view.MediaFrame.Select,i=wp.media.view.l10n,a=t.extend({defaults:{id:"media",url:"",menu:"media-details",content:"media-details",toolbar:"media-details",type:"link",priority:120},initialize:function(e){this.DetailsView=e.DetailsView,this.cancelText=e.cancelText,this.addText=e.addText,this.media=new wp.media.model.PostMedia(e.metadata),this.options.selection=new wp.media.model.Selection(this.media.attachment,{multiple:!1}),t.prototype.initialize.apply(this,arguments)},bindHandlers:function(){var e=this.defaults.menu;t.prototype.bindHandlers.apply(this,arguments),this.on("menu:create:"+e,this.createMenu,this),this.on("content:render:"+e,this.renderDetailsContent,this),this.on("menu:render:"+e,this.renderMenu,this),this.on("toolbar:render:"+e,this.renderDetailsToolbar,this)},renderDetailsContent:function(){var e=new this.DetailsView({controller:this,model:this.state().media,attachment:this.state().media.attachment}).render();this.content.set(e)},renderMenu:function(e){var t=this.lastState(),i=t&&t.id,a=this;e.set({cancel:{text:this.cancelText,priority:20,click:function(){i?a.setState(i):a.close()}},separateCancel:new wp.media.View({className:"separator",priority:40})})},setPrimaryButton:function(e,t){this.toolbar.set(new wp.media.view.Toolbar({controller:this,items:{button:{style:"primary",text:e,priority:80,click:function(){var e=this.controller;t.call(this,e,e.state()),e.setState(e.options.state),e.reset()}}}}))},renderDetailsToolbar:function(){this.setPrimaryButton(i.update,function(e,t){e.close(),t.trigger("update",e.media.toJSON())})},renderReplaceToolbar:function(){this.setPrimaryButton(i.replace,function(e,t){var i=t.get("selection").single();e.media.changeAttachment(i),t.trigger("replace",e.media.toJSON())})},renderAddSourceToolbar:function(){this.setPrimaryButton(this.addText,function(e,t){var i=t.get("selection").single();e.media.setSource(i),t.trigger("add-source",e.media.toJSON())})}});e.exports=a},2075:function(e){var t=wp.media.view.MediaFrame.MediaDetails,i=wp.media.controller.MediaLibrary,a=wp.media.view.l10n,s=t.extend({defaults:{id:"video",url:"",menu:"video-details",content:"video-details",toolbar:"video-details",type:"link",title:a.videoDetailsTitle,priority:120},initialize:function(e){e.DetailsView=wp.media.view.VideoDetails,e.cancelText=a.videoDetailsCancel,e.addText=a.videoAddSourceTitle,t.prototype.initialize.call(this,e)},bindHandlers:function(){t.prototype.bindHandlers.apply(this,arguments),this.on("toolbar:render:replace-video",this.renderReplaceToolbar,this),this.on("toolbar:render:add-video-source",this.renderAddSourceToolbar,this),this.on("toolbar:render:select-poster-image",this.renderSelectPosterImageToolbar,this),this.on("toolbar:render:add-track",this.renderAddTrackToolbar,this)},createStates:function(){this.states.add([new wp.media.controller.VideoDetails({media:this.media}),new i({type:"video",id:"replace-video",title:a.videoReplaceTitle,toolbar:"replace-video",media:this.media,menu:"video-details"}),new i({type:"video",id:"add-video-source",title:a.videoAddSourceTitle,toolbar:"add-video-source",media:this.media,menu:!1}),new i({type:"image",id:"select-poster-image",title:a.videoSelectPosterImageTitle,toolbar:"select-poster-image",media:this.media,menu:"video-details"}),new i({type:"text",id:"add-track",title:a.videoAddTrackTitle,toolbar:"add-track",media:this.media,menu:"video-details"})])},renderSelectPosterImageToolbar:function(){this.setPrimaryButton(a.videoSelectPosterImageTitle,function(t,e){var i=[],a=e.get("selection").single();t.media.set("poster",a.get("url")),e.trigger("set-poster-image",t.media.toJSON()),_.each(wp.media.view.settings.embedExts,function(e){t.media.get(e)&&i.push(t.media.get(e))}),wp.ajax.send("set-attachment-thumbnail",{data:{urls:i,thumbnail_id:a.get("id")}})})},renderAddTrackToolbar:function(){this.setPrimaryButton(a.videoAddTrackTitle,function(e,t){var i=t.get("selection").single(),a=e.media.get("content");-1===a.indexOf(i.get("url"))&&(a+=['<track srclang="en" label="English" kind="subtitles" src="',i.get("url"),'" />'].join(""),e.media.set("content",a)),t.trigger("add-track",e.media.toJSON())})}});e.exports=s},8867:function(e){var t=wp.media.view.Settings.AttachmentDisplay,i=jQuery,a=t.extend({initialize:function(){_.bindAll(this,"success"),this.players=[],this.listenTo(this.controller.states,"close",wp.media.mixin.unsetPlayers),this.on("ready",this.setPlayer),this.on("media:setting:remove",wp.media.mixin.unsetPlayers,this),this.on("media:setting:remove",this.render),this.on("media:setting:remove",this.setPlayer),t.prototype.initialize.apply(this,arguments)},events:function(){return _.extend({"click .remove-setting":"removeSetting","change .content-track":"setTracks","click .remove-track":"setTracks","click .add-media-source":"addSource"},t.prototype.events)},prepare:function(){return _.defaults({model:this.model.toJSON()},this.options)},removeSetting:function(e){var e=i(e.currentTarget).parent(),t=e.find("input").data("setting");t&&(this.model.unset(t),this.trigger("media:setting:remove",this)),e.remove()},setTracks:function(){var t="";_.each(this.$(".content-track"),function(e){t+=i(e).val()}),this.model.set("content",t),this.trigger("media:setting:remove",this)},addSource:function(e){this.controller.lastMime=i(e.currentTarget).data("mime"),this.controller.setState("add-"+this.controller.defaults.id+"-source")},loadPlayer:function(){this.players.push(new MediaElementPlayer(this.media,this.settings)),this.scriptXhr=!1},setPlayer:function(){var e;this.players.length||!this.media||this.scriptXhr||((e=this.model.get("src"))&&-1<e.indexOf("vimeo")&&!("Vimeo"in window)?this.scriptXhr=i.getScript("https://player.vimeo.com/api/player.js",_.bind(this.loadPlayer,this)):this.loadPlayer())},setMedia:function(){return this},success:function(e){var t=e.attributes.autoplay&&"false"!==e.attributes.autoplay;"flash"===e.pluginType&&t&&e.addEventListener("canplay",function(){e.play()},!1),this.mejs=e},render:function(){return t.prototype.render.apply(this,arguments),setTimeout(_.bind(function(){this.scrollToTop()},this),10),this.settings=_.defaults({success:this.success},wp.media.mixin.mejsSettings),this.setMedia()},scrollToTop:function(){this.$(".embed-media-settings").scrollTop(0)}},{instances:0,prepareSrc:function(e){var t=a.instances++;return _.each(i(e).find("source"),function(e){e.src=[e.src,-1<e.src.indexOf("?")?"&":"?","_=",t].join("")}),e}});e.exports=a},7697:function(e){var t=wp.media.view.MediaDetails,i=t.extend({className:"video-details",template:wp.template("video-details"),setMedia:function(){var e=this.$(".wp-video-shortcode");return e.find("source").length?(e.is(":hidden")&&e.show(),e.hasClass("youtube-video")||e.hasClass("vimeo-video")?this.media=e.get(0):this.media=t.prepareSrc(e.get(0))):(e.hide(),this.media=!1),this}});e.exports=i}},a={};function s(e){var t=a[e];return void 0!==t||(t=a[e]={exports:{}},i[e](t,t.exports,s)),t.exports}var e,t,o;e=wp.media,t=window._wpmejsSettings||{},o=window._wpMediaViewsL10n||{},wp.media.mixin={mejsSettings:t,removeAllPlayers:function(){if(window.mejs&&window.mejs.players)for(var e in window.mejs.players)window.mejs.players[e].pause(),this.removePlayer(window.mejs.players[e])},removePlayer:function(e){var t,i;if(e.options){for(t in e.options.features)if(e["clean"+(i=e.options.features[t])])try{e["clean"+i](e)}catch(e){}e.isDynamic||e.node.remove(),"html5"!==e.media.rendererName&&e.media.remove(),delete window.mejs.players[e.id],e.container.remove(),e.globalUnbind("resize",e.globalResizeCallback),e.globalUnbind("keydown",e.globalKeydownCallback),e.globalUnbind("click",e.globalClickCallback),delete e.media.player}},unsetPlayers:function(){this.players&&this.players.length&&(_.each(this.players,function(e){e.pause(),wp.media.mixin.removePlayer(e)}),this.players=[])}},wp.media.playlist=new wp.media.collection({tag:"playlist",editTitle:o.editPlaylistTitle,defaults:{id:wp.media.view.settings.post.id,style:"light",tracklist:!0,tracknumbers:!0,images:!0,artists:!0,type:"audio"}}),wp.media.audio={coerce:wp.media.coerce,defaults:{id:wp.media.view.settings.post.id,src:"",loop:!1,autoplay:!1,preload:"none",width:400},edit:function(e){e=wp.shortcode.next("audio",e).shortcode;return wp.media({frame:"audio",state:"audio-details",metadata:_.defaults(e.attrs.named,this.defaults)})},shortcode:function(i){var e;return _.each(this.defaults,function(e,t){i[t]=this.coerce(i,t),e===i[t]&&delete i[t]},this),e=i.content,delete i.content,new wp.shortcode({tag:"audio",attrs:i,content:e})}},wp.media.video={coerce:wp.media.coerce,defaults:{id:wp.media.view.settings.post.id,src:"",poster:"",loop:!1,autoplay:!1,preload:"metadata",content:"",width:640,height:360},edit:function(e){var e=wp.shortcode.next("video",e).shortcode,t=e.attrs.named;return t.content=e.content,wp.media({frame:"video",state:"video-details",metadata:_.defaults(t,this.defaults)})},shortcode:function(i){var e;return _.each(this.defaults,function(e,t){i[t]=this.coerce(i,t),e===i[t]&&delete i[t]},this),e=i.content,delete i.content,new wp.shortcode({tag:"video",attrs:i,content:e})}},e.model.PostMedia=s(6615),e.controller.AudioDetails=s(6045),e.controller.VideoDetails=s(580),e.view.MediaFrame.MediaDetails=s(6445),e.view.MediaFrame.AudioDetails=s(5262),e.view.MediaFrame.VideoDetails=s(2075),e.view.MediaDetails=s(8867),e.view.AudioDetails=s(1764),e.view.VideoDetails=s(7697)}();