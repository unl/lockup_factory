define(["plugins/mediaelement/mediaelement-and-player","jquery","analytics"],function(e,t,n){t.extend(e.MepDefaults,{googleAnalyticsTitle:"",googleAnalyticsCategory:"Media",googleAnalyticsEventPlay:"Play",googleAnalyticsEventPause:"Pause",googleAnalyticsEventEnded:"Ended",googleAnalyticsEventTime:"Time"}),t.extend(MediaElementPlayer.prototype,{buildgoogleanalytics:function(e,t,o,l){l.addEventListener("play",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventPlay,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1),l.addEventListener("pause",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventPause,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1),l.addEventListener("ended",function(){n.callTrackEvent(e.options.googleAnalyticsCategory,e.options.googleAnalyticsEventEnded,e.options.googleAnalyticsTitle||l.title||e.currentSrc)},!1)}})});
//# sourceMappingURL=mep-feature-googleanalytics.js.map