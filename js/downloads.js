var downloads = {
  "zip" : "",
  "msi" : "",
  "jar" : ""
}

function getDownloads() {
  return downloads;
}

$(document).ready(function() {
  $.ajax(
    {
      url: "https://api.bitbucket.org/2.0/repositories/pview/pview-downloads/downloads/",
      async: false,
      success: function (result) {

        var values = result["values"]

        downloadsLoop:
        for (var i = 0; i < values.length; i++) {
          var value = values[i]
          var href = value["links"]["self"]["href"];

          for (const type in downloads) {
            if (downloads[type] != "")
              continue;
              console.log(href)
            
            if (href.includes(type))
              downloads[type] = href
          }
        }
      }
    }
  );

  $(".download-zip").click(function(e) {
    window.location.href = downloads["zip"];
  })
  $(".download-jar").click(function(e) {
    window.location.href = downloads["jar"];
  })
  $(".download-msi").click(function(e) {
    window.location.href = downloads["msi"];
  })
});