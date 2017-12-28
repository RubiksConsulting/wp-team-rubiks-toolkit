/**
* Performs WordPress ajax call
* @param string method - which request method to use | options are GET or POST
* @param object payload - object array containing data to send with request
* @param function callback - function name ot call on success
* @return void
*/
function wordpressAjaxCall(method, payload, callback){
  jQuery.ajax({
    type: method,
    url: ajaxurl,
    data: payload,
    success: function(data){
      callback(data);
    }
  });
}
 /**
 * Extracts a URL parameter from a given string
 * @param string name - name of parameter to look for
 * @param string url - url to search | optional | defaults to current url if FALSE
 * @return mixed false when no match for the name is found | returns the value of the parameter if found
 */
function getURLParameter(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
  if (!results) return false;
  if (!results[2]) return false;
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

/**
* Returns html for rendering wordpress spinner
* @return string html to render spinner
*/
function getWordpressSpinner(){
  return '<div class="spinner is-active" style="float:none;"></div>';
}
