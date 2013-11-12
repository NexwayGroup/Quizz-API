<!DOCTYPE html>
<html>
<head>
  <title>
    Magento Buzz Quiz API Demo
  </title>
  <script src="lib/prototype.js"></script>
  <script src="lib/formater.js"></script>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script>
        function demo(demoContainerId, params) {
            new Ajax.Request('api.php', {
                method: 'get',
                parameters: params,
                onSuccess: function(response) {
                   $(demoContainerId).update(jsl.format.formatJson(
                        Object.toJSON(response.responseJSON)
                   )); 
                   console.log(jsl);
                },
                onFailure: function(response) {
                   $(demoContainerId).insert(Object.toJSON(
                        {
                            success: false,
                            msg: "Api unavailable (connection/ajax failure"
                        }        
                   )); 
                }
            });
        }
  </script>
</head>
<body>

  <h2> Usage </h2>
  <pre class="prettyprint">

        new Ajax.Request('api.php', {
            method: 'get',
            parameters: params,
            onSuccess: function(response) {
                console.log(response.responseJSON);
            };
        }); 
  </pre> 

    <h4> Install </h4>
    <i> params </i>
  <pre class="prettyprint">

    {
        action: install 
    }
  </pre>
  <button type="submit" onclick="demo('install', { action: 'install' })">Go</button>
  <pre class="prettyprint" id='install'></pre>


    <h4> Installed </h4>
    <i> params </i>
  <pre class="prettyprint">

    {
        action: installed
    }
  </pre>
  <button type="submit" onclick="demo('installed', { action: 'installed' })">Go</button>
  <pre class="prettyprint" id='installed'></pre>

    <h4> Question </h4>
    <i> params </i>
  <pre class="prettyprint">

    {
        action: question 
    }
  </pre>
  <button type="submit" onclick="demo('question', { action: 'question' })">Go</button>
  <pre class="prettyprint" id='question'></pre>


</body>
</html>
