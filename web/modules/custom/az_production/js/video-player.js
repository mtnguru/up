
player = videojs('my-video', {
  autoplay: false,
  controls: true,
  fluid: true,
  inactivityTimeout: 1000,
  liveui: true,   // WTF
  plugins: {
    hotkeys: {
       enableModifiersForNumbers: false,
    }
  }
});

player.addClass('my-new-class');

player.volume(.1);
player.src([
   {type: 'video/mp4', src: "https://vjs.zencdn.net/v/oceans.mp4"},
   {type: 'video/webm', src: "https://vjs.zencdn.net/v/oceans.webm"}
]);
player.fluid(true);

player.poster("posters/bridge.png");
player.ready(() => {
  var tech = player.tech(false);
  return tech;
})
player.playbackRates([0.25, 0.5, .75, 1, 1.5, 2, 2.5, 3]);

player.qualitySelector();

player.dotsubCaptions();

player.languageSwitch({
    languages: [
      {
        name: 'English',
        sources: [
          {
            src: 'http://bit.ly/2iJXRec',
            type: 'video/mp4',
            res: 'Medium'
          },
          {
            src: 'http://bit.ly/2jxmfwI',
            type: 'video/webm',
            res: 'Medium'
          }
        ]
      },
      {
        name: 'Portuguese',
        sources: [
          {
            src: 'http://bit.ly/2jVlmho',
            type: 'video/mp4',
            res: 'Medium'
          },
          {
            src: 'http://bit.ly/2jVlTzx',
            type: 'video/webm',
            res: 'Medium'
          }
        ]
      }
    ]
})

/*
player.watermark({
  file: 'https://picsum.photos/50/50',
  xpos: 0,
  ypos: 0,
  opacity: 0.6,
  clickable: true,
  url: 'https://verkonnet.com'
)};
*/


