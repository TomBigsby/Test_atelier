formintorjs.define("jquery",[],function(){return jQuery}),formintorjs.define("forminator_global_data",function(){return forminatorData}),formintorjs.define("forminator_language",function(){return forminatorl10n});var Forminator=window.Forminator||{};Forminator.Events={},Forminator.Data={},Forminator.l10n={},Forminator.openPreset=function(o,r){var n=/([?&]preset)=([^&]*)/g,t=window.location.href.replace(n,"$1="+o);t===window.location.href&&(t+="&preset="+o),r&&(t+="&forminator_notice="+r),window.location.href=t},formintorjs.require.config({baseUrl:".",paths:{js:".",admin:"admin"},shim:{backbone:{deps:["underscore","jquery","forminator_global_data","forminator_language"],exports:"Backbone"},underscore:{exports:"_"}},waitSeconds:60}),formintorjs.require(["admin/utils"],function(o){_.templateSettings={evaluate:/\{\[([\s\S]+?)\]\}/g,interpolate:/\{\{([\s\S]+?)\}\}/g},_.extend(Forminator.Data,forminatorData),_.extend(Forminator.l10n,forminatorl10n),_.extend(Forminator,o),_.extend(Forminator.Events,Backbone.Events),formintorjs.require(["admin/application"],function(o){jQuery(document).ready(function(){_.extend(Forminator,o),Forminator.Events.trigger("application:booted"),Backbone.history.start()})})});