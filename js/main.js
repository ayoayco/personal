(function() {

    $.getJSON("api/index.php/timeline_post", function(data) {
        updateTimelinePosts(data)
    });

    function updateTimelinePosts(data) {
        var content = "";
        data.forEach(function(element) {
            console.log(element);
            content += `<div class="timeline-row">
                  <div class="timeline-time">
                    <small>` + element['month-day'] + `</small>` + element['year'] +
                `</div><div class="timeline-icon">
                    <div class="bg-` + element['context'] + ` text-` + element['context'] + `">
                      <i class="fa fa-` + element['icon'] + `"></i>
                    </div>
                  </div>
                  <div class="panel timeline-content">
                    <div class="panel-body">
                     <h2 class="text-center">` + element['title'] + `</h2>
                      <p>
                        ` + element['body'] + `
                      </p>
                    </div>
                  </div>
                </div>`;
        }, this);

        $('.timeline').html(content);
    }

})();