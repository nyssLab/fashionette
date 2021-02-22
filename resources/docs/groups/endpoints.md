# Endpoints


## _debugbar/open




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php",
            "line": 38,
            "function": "abort"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_debugbar-open" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_debugbar-open"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-open"></code></pre>
</div>
<div id="execution-error-GET_debugbar-open" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-open"></code></pre>
</div>
<form id="form-GET_debugbar-open" data-method="GET" data-path="_debugbar/open" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-open', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_debugbar-open" onclick="tryItOut('GET_debugbar-open');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_debugbar-open" onclick="cancelTryOut('GET_debugbar-open');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_debugbar-open" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_debugbar/open</code></b>
</p>
</form>


## Return Clockwork output




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/_debugbar/clockwork/laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/_debugbar/clockwork/laborum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php",
            "line": 38,
            "function": "abort"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_debugbar-clockwork--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_debugbar-clockwork--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-clockwork--id-"></code></pre>
</div>
<div id="execution-error-GET_debugbar-clockwork--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-clockwork--id-"></code></pre>
</div>
<form id="form-GET_debugbar-clockwork--id-" data-method="GET" data-path="_debugbar/clockwork/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-clockwork--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_debugbar-clockwork--id-" onclick="tryItOut('GET_debugbar-clockwork--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_debugbar-clockwork--id-" onclick="cancelTryOut('GET_debugbar-clockwork--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_debugbar-clockwork--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_debugbar/clockwork/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GET_debugbar-clockwork--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## _debugbar/telescope/{id}




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/_debugbar/telescope/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/_debugbar/telescope/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php",
            "line": 38,
            "function": "abort"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_debugbar-telescope--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_debugbar-telescope--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-telescope--id-"></code></pre>
</div>
<div id="execution-error-GET_debugbar-telescope--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-telescope--id-"></code></pre>
</div>
<form id="form-GET_debugbar-telescope--id-" data-method="GET" data-path="_debugbar/telescope/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-telescope--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_debugbar-telescope--id-" onclick="tryItOut('GET_debugbar-telescope--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_debugbar-telescope--id-" onclick="cancelTryOut('GET_debugbar-telescope--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_debugbar-telescope--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_debugbar/telescope/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GET_debugbar-telescope--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Return the stylesheets for the Debugbar




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php",
            "line": 38,
            "function": "abort"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_debugbar-assets-stylesheets" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_debugbar-assets-stylesheets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-assets-stylesheets"></code></pre>
</div>
<div id="execution-error-GET_debugbar-assets-stylesheets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-assets-stylesheets"></code></pre>
</div>
<form id="form-GET_debugbar-assets-stylesheets" data-method="GET" data-path="_debugbar/assets/stylesheets" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-assets-stylesheets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_debugbar-assets-stylesheets" onclick="tryItOut('GET_debugbar-assets-stylesheets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_debugbar-assets-stylesheets" onclick="cancelTryOut('GET_debugbar-assets-stylesheets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_debugbar-assets-stylesheets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_debugbar/assets/stylesheets</code></b>
</p>
</form>


## Return the javascript for the Debugbar




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\DebugbarEnabled.php",
            "line": 38,
            "function": "abort"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_debugbar-assets-javascript" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_debugbar-assets-javascript"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_debugbar-assets-javascript"></code></pre>
</div>
<div id="execution-error-GET_debugbar-assets-javascript" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_debugbar-assets-javascript"></code></pre>
</div>
<form id="form-GET_debugbar-assets-javascript" data-method="GET" data-path="_debugbar/assets/javascript" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET_debugbar-assets-javascript', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_debugbar-assets-javascript" onclick="tryItOut('GET_debugbar-assets-javascript');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_debugbar-assets-javascript" onclick="cancelTryOut('GET_debugbar-assets-javascript');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_debugbar-assets-javascript" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_debugbar/assets/javascript</code></b>
</p>
</form>


## Forget a cache key




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/_debugbar/cache/mollitia/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/_debugbar/cache/mollitia/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETE_debugbar-cache--key---tags--" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETE_debugbar-cache--key---tags--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETE_debugbar-cache--key---tags--"></code></pre>
</div>
<div id="execution-error-DELETE_debugbar-cache--key---tags--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETE_debugbar-cache--key---tags--"></code></pre>
</div>
<form id="form-DELETE_debugbar-cache--key---tags--" data-method="DELETE" data-path="_debugbar/cache/{key}/{tags?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETE_debugbar-cache--key---tags--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETE_debugbar-cache--key---tags--" onclick="tryItOut('DELETE_debugbar-cache--key---tags--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETE_debugbar-cache--key---tags--" onclick="cancelTryOut('DELETE_debugbar-cache--key---tags--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETE_debugbar-cache--key---tags--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>_debugbar/cache/{key}/{tags?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="DELETE_debugbar-cache--key---tags--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>tags</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tags" data-endpoint="DELETE_debugbar-cache--key---tags--" data-component="url"  hidden>
<br>
</p>
</form>


## The action to show widget output via ajax.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/arrilot/load-widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/arrilot/load-widget"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "The payload is invalid.",
    "exception": "Illuminate\\Contracts\\Encryption\\DecryptException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Encryption\\Encrypter.php",
    "line": 195,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Encryption\\Encrypter.php",
            "line": 136,
            "function": "getJsonPayload",
            "class": "Illuminate\\Encryption\\Encrypter",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\arrilot\\laravel-widgets\\src\\Factories\\AbstractWidgetFactory.php",
            "line": 217,
            "function": "decrypt",
            "class": "Illuminate\\Encryption\\Encrypter",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\arrilot\\laravel-widgets\\src\\Controllers\\WidgetController.php",
            "line": 28,
            "function": "decryptWidgetParams",
            "class": "Arrilot\\Widgets\\Factories\\AbstractWidgetFactory",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "showWidget",
            "class": "Arrilot\\Widgets\\Controllers\\WidgetController",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETarrilot-load-widget" hidden>
    <blockquote>Received response<span id="execution-response-status-GETarrilot-load-widget"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETarrilot-load-widget"></code></pre>
</div>
<div id="execution-error-GETarrilot-load-widget" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETarrilot-load-widget"></code></pre>
</div>
<form id="form-GETarrilot-load-widget" data-method="GET" data-path="arrilot/load-widget" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETarrilot-load-widget', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETarrilot-load-widget" onclick="tryItOut('GETarrilot-load-widget');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETarrilot-load-widget" onclick="cancelTryOut('GETarrilot-load-widget');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETarrilot-load-widget" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>arrilot/load-widget</code></b>
</p>
</form>


## api/{any}




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/api/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/api/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\routes\\api.php",
            "line": 37,
            "function": "abort"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 230,
            "function": "{closure}",
            "class": "Illuminate\\Routing\\RouteFileRegistrar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 200,
            "function": "runCallable",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi--any-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi--any-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi--any-"></code></pre>
</div>
<div id="execution-error-GETapi--any-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi--any-"></code></pre>
</div>
<form id="form-GETapi--any-" data-method="GET" data-path="api/{any}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi--any-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi--any-" onclick="tryItOut('GETapi--any-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi--any-" onclick="cancelTryOut('GETapi--any-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi--any-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/{any}</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/{any}</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/{any}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/{any}</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/{any}</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/{any}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>any</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="any" data-endpoint="GETapi--any-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/login




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - Voyager</title>
    <link rel="stylesheet" href="http://fashionette.test/admin/voyager-assets?path=css%2Fapp.css">
        <style>
        body {
            background-image:url('http://fashionette.test/admin/voyager-assets?path=images%2Fbg.jpg');
            background-color: #FFFFFF;
        }
        body.login .login-sidebar {
            border-top:5px solid #22A7F0;
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                border-left:5px solid #22A7F0;
            }
        }
        body.login .form-group-default.focused{
            border-color:#22A7F0;
        }
        .login-button, .bar:before, .bar:after{
            background:#22A7F0;
        }
        .remember-me-text{
            padding:0 5px;
        }
    </style>
    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                                                                            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="http://fashionette.test/admin/voyager-assets?path=images%2Flogo-icon-light.png" alt="Logo Icon">
                                                <div class="copy animated fadeIn">
                            <h1>Voyager</h1>
                            <p>Welcome to Voyager. The Missing Admin for Laravel</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">

               <div class="login-container">

        <p>Sign In Below:</p>

        <form action="http://fashionette.test/admin/login" method="POST">
            <input type="hidden" name="_token" value="AfVvHjMKNXrmn1ICvkshSmKXSys5C6rwm3UghAiN">
            <div class="form-group form-group-default" id="emailGroup">
                <label>E-mail</label>
                <div class="controls">
                    <input type="text" name="email" id="email" value="" placeholder="E-mail" class="form-control" required>
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <label>Password</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
            </div>

            <div class="form-group" id="rememberMeGroup">
                <div class="controls">
                    <input type="checkbox" name="remember" id="remember" value="1"><label for="remember" class="remember-me-text">Remember me</label>
                </div>
            </div>

            <button type="submit" class="btn btn-block login-button">
                <span class="signingin hidden"><span class="voyager-refresh"></span> Logging in...</span>
                <span class="signin">Login</span>
            </button>

        </form>

        <div style="clear:both"></div>

        
    </div> <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });

    </script>
</body>
</html>

```
<div id="execution-results-GETadmin-login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-login"></code></pre>
</div>
<div id="execution-error-GETadmin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-login"></code></pre>
</div>
<form id="form-GETadmin-login" data-method="GET" data-path="admin/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-login" onclick="tryItOut('GETadmin-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-login" onclick="cancelTryOut('GETadmin-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/login</code></b>
</p>
</form>


## admin/login




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-login"></code></pre>
</div>
<div id="execution-error-POSTadmin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-login"></code></pre>
</div>
<form id="form-POSTadmin-login" data-method="POST" data-path="admin/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-login" onclick="tryItOut('POSTadmin-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-login" onclick="cancelTryOut('POSTadmin-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/login</code></b>
</p>
</form>


## admin/hooks




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/hooks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/hooks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-hooks" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-hooks"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-hooks"></code></pre>
</div>
<div id="execution-error-GETadmin-hooks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-hooks"></code></pre>
</div>
<form id="form-GETadmin-hooks" data-method="GET" data-path="admin/hooks" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-hooks', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-hooks" onclick="tryItOut('GETadmin-hooks');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-hooks" onclick="cancelTryOut('GETadmin-hooks');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-hooks" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/hooks</code></b>
</p>
</form>


## admin/hooks/{name}/enable




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/hooks/corporis/enable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/hooks/corporis/enable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-hooks--name--enable" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-hooks--name--enable"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-hooks--name--enable"></code></pre>
</div>
<div id="execution-error-GETadmin-hooks--name--enable" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-hooks--name--enable"></code></pre>
</div>
<form id="form-GETadmin-hooks--name--enable" data-method="GET" data-path="admin/hooks/{name}/enable" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-hooks--name--enable', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-hooks--name--enable" onclick="tryItOut('GETadmin-hooks--name--enable');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-hooks--name--enable" onclick="cancelTryOut('GETadmin-hooks--name--enable');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-hooks--name--enable" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/hooks/{name}/enable</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETadmin-hooks--name--enable" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/hooks/{name}/disable




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/hooks/asperiores/disable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/hooks/asperiores/disable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-hooks--name--disable" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-hooks--name--disable"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-hooks--name--disable"></code></pre>
</div>
<div id="execution-error-GETadmin-hooks--name--disable" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-hooks--name--disable"></code></pre>
</div>
<form id="form-GETadmin-hooks--name--disable" data-method="GET" data-path="admin/hooks/{name}/disable" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-hooks--name--disable', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-hooks--name--disable" onclick="tryItOut('GETadmin-hooks--name--disable');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-hooks--name--disable" onclick="cancelTryOut('GETadmin-hooks--name--disable');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-hooks--name--disable" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/hooks/{name}/disable</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETadmin-hooks--name--disable" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/hooks/{name}/update




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/hooks/quia/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/hooks/quia/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-hooks--name--update" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-hooks--name--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-hooks--name--update"></code></pre>
</div>
<div id="execution-error-GETadmin-hooks--name--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-hooks--name--update"></code></pre>
</div>
<form id="form-GETadmin-hooks--name--update" data-method="GET" data-path="admin/hooks/{name}/update" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-hooks--name--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-hooks--name--update" onclick="tryItOut('GETadmin-hooks--name--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-hooks--name--update" onclick="cancelTryOut('GETadmin-hooks--name--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-hooks--name--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/hooks/{name}/update</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETadmin-hooks--name--update" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/hooks




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/hooks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/hooks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-hooks" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-hooks"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-hooks"></code></pre>
</div>
<div id="execution-error-POSTadmin-hooks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-hooks"></code></pre>
</div>
<form id="form-POSTadmin-hooks" data-method="POST" data-path="admin/hooks" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-hooks', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-hooks" onclick="tryItOut('POSTadmin-hooks');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-hooks" onclick="cancelTryOut('POSTadmin-hooks');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-hooks" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/hooks</code></b>
</p>
</form>


## admin/hooks/{name}




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/hooks/impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/hooks/impedit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-hooks--name-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-hooks--name-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-hooks--name-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-hooks--name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-hooks--name-"></code></pre>
</div>
<form id="form-DELETEadmin-hooks--name-" data-method="DELETE" data-path="admin/hooks/{name}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-hooks--name-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-hooks--name-" onclick="tryItOut('DELETEadmin-hooks--name-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-hooks--name-" onclick="cancelTryOut('DELETEadmin-hooks--name-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-hooks--name-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/hooks/{name}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="DELETEadmin-hooks--name-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin"></code></pre>
</div>
<div id="execution-error-GETadmin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin"></code></pre>
</div>
<form id="form-GETadmin" data-method="GET" data-path="admin" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin" onclick="tryItOut('GETadmin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin" onclick="cancelTryOut('GETadmin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin</code></b>
</p>
</form>


## admin/logout




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-logout"></code></pre>
</div>
<div id="execution-error-POSTadmin-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-logout"></code></pre>
</div>
<form id="form-POSTadmin-logout" data-method="POST" data-path="admin/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-logout" onclick="tryItOut('POSTadmin-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-logout" onclick="cancelTryOut('POSTadmin-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/logout</code></b>
</p>
</form>


## admin/upload




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-upload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-upload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-upload"></code></pre>
</div>
<div id="execution-error-POSTadmin-upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-upload"></code></pre>
</div>
<form id="form-POSTadmin-upload" data-method="POST" data-path="admin/upload" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-upload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-upload" onclick="tryItOut('POSTadmin-upload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-upload" onclick="cancelTryOut('POSTadmin-upload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-upload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/upload</code></b>
</p>
</form>


## admin/profile




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-profile"></code></pre>
</div>
<div id="execution-error-GETadmin-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-profile"></code></pre>
</div>
<form id="form-GETadmin-profile" data-method="GET" data-path="admin/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-profile" onclick="tryItOut('GETadmin-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-profile" onclick="cancelTryOut('GETadmin-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/profile</code></b>
</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users-order"></code></pre>
</div>
<div id="execution-error-GETadmin-users-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users-order"></code></pre>
</div>
<form id="form-GETadmin-users-order" data-method="GET" data-path="admin/users/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users-order" onclick="tryItOut('GETadmin-users-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users-order" onclick="cancelTryOut('GETadmin-users-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/order</code></b>
</p>
</form>


## admin/users/action




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/users/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-users-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-users-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-users-action"></code></pre>
</div>
<div id="execution-error-POSTadmin-users-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-users-action"></code></pre>
</div>
<form id="form-POSTadmin-users-action" data-method="POST" data-path="admin/users/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-users-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-users-action" onclick="tryItOut('POSTadmin-users-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-users-action" onclick="cancelTryOut('POSTadmin-users-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-users-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/users/action</code></b>
</p>
</form>


## admin/users/order




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/users/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-users-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-users-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-users-order"></code></pre>
</div>
<div id="execution-error-POSTadmin-users-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-users-order"></code></pre>
</div>
<form id="form-POSTadmin-users-order" data-method="POST" data-path="admin/users/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-users-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-users-order" onclick="tryItOut('POSTadmin-users-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-users-order" onclick="cancelTryOut('POSTadmin-users-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-users-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/users/order</code></b>
</p>
</form>


## admin/users/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users/aspernatur/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/aspernatur/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users--id--restore"></code></pre>
</div>
<div id="execution-error-GETadmin-users--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users--id--restore"></code></pre>
</div>
<form id="form-GETadmin-users--id--restore" data-method="GET" data-path="admin/users/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users--id--restore" onclick="tryItOut('GETadmin-users--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users--id--restore" onclick="cancelTryOut('GETadmin-users--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-users--id--restore" data-component="url" required  hidden>
<br>
</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users-relation"></code></pre>
</div>
<div id="execution-error-GETadmin-users-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users-relation"></code></pre>
</div>
<form id="form-GETadmin-users-relation" data-method="GET" data-path="admin/users/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users-relation" onclick="tryItOut('GETadmin-users-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users-relation" onclick="cancelTryOut('GETadmin-users-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/relation</code></b>
</p>
</form>


## admin/users/remove




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/users/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-users-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-users-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-users-remove"></code></pre>
</div>
<div id="execution-error-POSTadmin-users-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-users-remove"></code></pre>
</div>
<form id="form-POSTadmin-users-remove" data-method="POST" data-path="admin/users/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-users-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-users-remove" onclick="tryItOut('POSTadmin-users-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-users-remove" onclick="cancelTryOut('POSTadmin-users-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-users-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/users/remove</code></b>
</p>
</form>


## admin/users




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users"></code></pre>
</div>
<div id="execution-error-GETadmin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users"></code></pre>
</div>
<form id="form-GETadmin-users" data-method="GET" data-path="admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users" onclick="tryItOut('GETadmin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users" onclick="cancelTryOut('GETadmin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users</code></b>
</p>
</form>


## admin/users/create




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users-create"></code></pre>
</div>
<div id="execution-error-GETadmin-users-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users-create"></code></pre>
</div>
<form id="form-GETadmin-users-create" data-method="GET" data-path="admin/users/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users-create" onclick="tryItOut('GETadmin-users-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users-create" onclick="cancelTryOut('GETadmin-users-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-users"></code></pre>
</div>
<div id="execution-error-POSTadmin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-users"></code></pre>
</div>
<form id="form-POSTadmin-users" data-method="POST" data-path="admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-users" onclick="tryItOut('POSTadmin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-users" onclick="cancelTryOut('POSTadmin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/users</code></b>
</p>
</form>


## admin/users/{id}




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/sint"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users--id-"></code></pre>
</div>
<form id="form-GETadmin-users--id-" data-method="GET" data-path="admin/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users--id-" onclick="tryItOut('GETadmin-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users--id-" onclick="cancelTryOut('GETadmin-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/users/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/users/officiis/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/officiis/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-users--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users--id--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-users--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users--id--edit"></code></pre>
</div>
<form id="form-GETadmin-users--id--edit" data-method="GET" data-path="admin/users/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users--id--edit" onclick="tryItOut('GETadmin-users--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users--id--edit" onclick="cancelTryOut('GETadmin-users--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-users--id--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/users/{id}




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/users/tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/tempore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-users--id-"></code></pre>
</div>
<div id="execution-error-PUTadmin-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-users--id-"></code></pre>
</div>
<form id="form-PUTadmin-users--id-" data-method="PUT" data-path="admin/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-users--id-" onclick="tryItOut('PUTadmin-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-users--id-" onclick="cancelTryOut('PUTadmin-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/users/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTadmin-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/users/{id}




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/users/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/users/corrupti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-users--id-"></code></pre>
</div>
<form id="form-DELETEadmin-users--id-" data-method="DELETE" data-path="admin/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-users--id-" onclick="tryItOut('DELETEadmin-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-users--id-" onclick="cancelTryOut('DELETEadmin-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEadmin-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus-order"></code></pre>
</div>
<div id="execution-error-GETadmin-menus-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus-order"></code></pre>
</div>
<form id="form-GETadmin-menus-order" data-method="GET" data-path="admin/menus/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus-order" onclick="tryItOut('GETadmin-menus-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus-order" onclick="cancelTryOut('GETadmin-menus-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/order</code></b>
</p>
</form>


## admin/menus/action




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/menus/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-menus-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-menus-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-menus-action"></code></pre>
</div>
<div id="execution-error-POSTadmin-menus-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-menus-action"></code></pre>
</div>
<form id="form-POSTadmin-menus-action" data-method="POST" data-path="admin/menus/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-menus-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-menus-action" onclick="tryItOut('POSTadmin-menus-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-menus-action" onclick="cancelTryOut('POSTadmin-menus-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-menus-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/menus/action</code></b>
</p>
</form>


## admin/menus/order




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/menus/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-menus-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-menus-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-menus-order"></code></pre>
</div>
<div id="execution-error-POSTadmin-menus-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-menus-order"></code></pre>
</div>
<form id="form-POSTadmin-menus-order" data-method="POST" data-path="admin/menus/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-menus-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-menus-order" onclick="tryItOut('POSTadmin-menus-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-menus-order" onclick="cancelTryOut('POSTadmin-menus-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-menus-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/menus/order</code></b>
</p>
</form>


## admin/menus/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/in/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/in/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus--id--restore"></code></pre>
</div>
<div id="execution-error-GETadmin-menus--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus--id--restore"></code></pre>
</div>
<form id="form-GETadmin-menus--id--restore" data-method="GET" data-path="admin/menus/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus--id--restore" onclick="tryItOut('GETadmin-menus--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus--id--restore" onclick="cancelTryOut('GETadmin-menus--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-menus--id--restore" data-component="url" required  hidden>
<br>
</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus-relation"></code></pre>
</div>
<div id="execution-error-GETadmin-menus-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus-relation"></code></pre>
</div>
<form id="form-GETadmin-menus-relation" data-method="GET" data-path="admin/menus/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus-relation" onclick="tryItOut('GETadmin-menus-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus-relation" onclick="cancelTryOut('GETadmin-menus-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/relation</code></b>
</p>
</form>


## admin/menus/remove




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/menus/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-menus-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-menus-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-menus-remove"></code></pre>
</div>
<div id="execution-error-POSTadmin-menus-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-menus-remove"></code></pre>
</div>
<form id="form-POSTadmin-menus-remove" data-method="POST" data-path="admin/menus/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-menus-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-menus-remove" onclick="tryItOut('POSTadmin-menus-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-menus-remove" onclick="cancelTryOut('POSTadmin-menus-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-menus-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/menus/remove</code></b>
</p>
</form>


## admin/menus




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus"></code></pre>
</div>
<div id="execution-error-GETadmin-menus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus"></code></pre>
</div>
<form id="form-GETadmin-menus" data-method="GET" data-path="admin/menus" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus" onclick="tryItOut('GETadmin-menus');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus" onclick="cancelTryOut('GETadmin-menus');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus</code></b>
</p>
</form>


## admin/menus/create




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus-create"></code></pre>
</div>
<div id="execution-error-GETadmin-menus-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus-create"></code></pre>
</div>
<form id="form-GETadmin-menus-create" data-method="GET" data-path="admin/menus/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus-create" onclick="tryItOut('GETadmin-menus-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus-create" onclick="cancelTryOut('GETadmin-menus-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-menus" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-menus"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-menus"></code></pre>
</div>
<div id="execution-error-POSTadmin-menus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-menus"></code></pre>
</div>
<form id="form-POSTadmin-menus" data-method="POST" data-path="admin/menus" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-menus', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-menus" onclick="tryItOut('POSTadmin-menus');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-menus" onclick="cancelTryOut('POSTadmin-menus');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-menus" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/menus</code></b>
</p>
</form>


## admin/menus/{id}




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/quis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus--id-"></code></pre>
</div>
<form id="form-GETadmin-menus--id-" data-method="GET" data-path="admin/menus/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus--id-" onclick="tryItOut('GETadmin-menus--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus--id-" onclick="cancelTryOut('GETadmin-menus--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-menus--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/modi/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/modi/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus--id--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-menus--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus--id--edit"></code></pre>
</div>
<form id="form-GETadmin-menus--id--edit" data-method="GET" data-path="admin/menus/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus--id--edit" onclick="tryItOut('GETadmin-menus--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus--id--edit" onclick="cancelTryOut('GETadmin-menus--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-menus--id--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{id}




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/menus/voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/voluptatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-menus--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-menus--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-menus--id-"></code></pre>
</div>
<div id="execution-error-PUTadmin-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-menus--id-"></code></pre>
</div>
<form id="form-PUTadmin-menus--id-" data-method="PUT" data-path="admin/menus/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-menus--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-menus--id-" onclick="tryItOut('PUTadmin-menus--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-menus--id-" onclick="cancelTryOut('PUTadmin-menus--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-menus--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/menus/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/menus/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTadmin-menus--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{id}




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/menus/provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/provident"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-menus--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-menus--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-menus--id-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-menus--id-"></code></pre>
</div>
<form id="form-DELETEadmin-menus--id-" data-method="DELETE" data-path="admin/menus/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-menus--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-menus--id-" onclick="tryItOut('DELETEadmin-menus--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-menus--id-" onclick="cancelTryOut('DELETEadmin-menus--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-menus--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/menus/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEadmin-menus--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles-order"></code></pre>
</div>
<div id="execution-error-GETadmin-roles-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles-order"></code></pre>
</div>
<form id="form-GETadmin-roles-order" data-method="GET" data-path="admin/roles/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles-order" onclick="tryItOut('GETadmin-roles-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles-order" onclick="cancelTryOut('GETadmin-roles-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/order</code></b>
</p>
</form>


## admin/roles/action




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/roles/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-roles-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-roles-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-roles-action"></code></pre>
</div>
<div id="execution-error-POSTadmin-roles-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-roles-action"></code></pre>
</div>
<form id="form-POSTadmin-roles-action" data-method="POST" data-path="admin/roles/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-roles-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-roles-action" onclick="tryItOut('POSTadmin-roles-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-roles-action" onclick="cancelTryOut('POSTadmin-roles-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-roles-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/roles/action</code></b>
</p>
</form>


## admin/roles/order




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/roles/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-roles-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-roles-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-roles-order"></code></pre>
</div>
<div id="execution-error-POSTadmin-roles-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-roles-order"></code></pre>
</div>
<form id="form-POSTadmin-roles-order" data-method="POST" data-path="admin/roles/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-roles-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-roles-order" onclick="tryItOut('POSTadmin-roles-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-roles-order" onclick="cancelTryOut('POSTadmin-roles-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-roles-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/roles/order</code></b>
</p>
</form>


## admin/roles/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles/tempora/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/tempora/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles--id--restore"></code></pre>
</div>
<div id="execution-error-GETadmin-roles--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles--id--restore"></code></pre>
</div>
<form id="form-GETadmin-roles--id--restore" data-method="GET" data-path="admin/roles/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles--id--restore" onclick="tryItOut('GETadmin-roles--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles--id--restore" onclick="cancelTryOut('GETadmin-roles--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-roles--id--restore" data-component="url" required  hidden>
<br>
</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles-relation"></code></pre>
</div>
<div id="execution-error-GETadmin-roles-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles-relation"></code></pre>
</div>
<form id="form-GETadmin-roles-relation" data-method="GET" data-path="admin/roles/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles-relation" onclick="tryItOut('GETadmin-roles-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles-relation" onclick="cancelTryOut('GETadmin-roles-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/relation</code></b>
</p>
</form>


## admin/roles/remove




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/roles/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-roles-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-roles-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-roles-remove"></code></pre>
</div>
<div id="execution-error-POSTadmin-roles-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-roles-remove"></code></pre>
</div>
<form id="form-POSTadmin-roles-remove" data-method="POST" data-path="admin/roles/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-roles-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-roles-remove" onclick="tryItOut('POSTadmin-roles-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-roles-remove" onclick="cancelTryOut('POSTadmin-roles-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-roles-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/roles/remove</code></b>
</p>
</form>


## admin/roles




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles"></code></pre>
</div>
<div id="execution-error-GETadmin-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles"></code></pre>
</div>
<form id="form-GETadmin-roles" data-method="GET" data-path="admin/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles" onclick="tryItOut('GETadmin-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles" onclick="cancelTryOut('GETadmin-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles</code></b>
</p>
</form>


## admin/roles/create




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles-create"></code></pre>
</div>
<div id="execution-error-GETadmin-roles-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles-create"></code></pre>
</div>
<form id="form-GETadmin-roles-create" data-method="GET" data-path="admin/roles/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles-create" onclick="tryItOut('GETadmin-roles-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles-create" onclick="cancelTryOut('GETadmin-roles-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/create</code></b>
</p>
</form>


## admin/roles




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-roles"></code></pre>
</div>
<div id="execution-error-POSTadmin-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-roles"></code></pre>
</div>
<form id="form-POSTadmin-roles" data-method="POST" data-path="admin/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-roles" onclick="tryItOut('POSTadmin-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-roles" onclick="cancelTryOut('POSTadmin-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/roles</code></b>
</p>
</form>


## admin/roles/{id}




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/iure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles--id-"></code></pre>
</div>
<form id="form-GETadmin-roles--id-" data-method="GET" data-path="admin/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles--id-" onclick="tryItOut('GETadmin-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles--id-" onclick="cancelTryOut('GETadmin-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-roles--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/roles/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/roles/facilis/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/facilis/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-roles--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles--id--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-roles--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles--id--edit"></code></pre>
</div>
<form id="form-GETadmin-roles--id--edit" data-method="GET" data-path="admin/roles/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles--id--edit" onclick="tryItOut('GETadmin-roles--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles--id--edit" onclick="cancelTryOut('GETadmin-roles--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-roles--id--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/roles/{id}




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/roles/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-roles--id-"></code></pre>
</div>
<div id="execution-error-PUTadmin-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-roles--id-"></code></pre>
</div>
<form id="form-PUTadmin-roles--id-" data-method="PUT" data-path="admin/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-roles--id-" onclick="tryItOut('PUTadmin-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-roles--id-" onclick="cancelTryOut('PUTadmin-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/roles/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTadmin-roles--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/roles/{id}




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/roles/ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/roles/ipsa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-roles--id-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-roles--id-"></code></pre>
</div>
<form id="form-DELETEadmin-roles--id-" data-method="DELETE" data-path="admin/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-roles--id-" onclick="tryItOut('DELETEadmin-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-roles--id-" onclick="cancelTryOut('DELETEadmin-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEadmin-roles--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{menu}/builder




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/menus/beatae/builder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/beatae/builder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-menus--menu--builder" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-menus--menu--builder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-menus--menu--builder"></code></pre>
</div>
<div id="execution-error-GETadmin-menus--menu--builder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-menus--menu--builder"></code></pre>
</div>
<form id="form-GETadmin-menus--menu--builder" data-method="GET" data-path="admin/menus/{menu}/builder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-menus--menu--builder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-menus--menu--builder" onclick="tryItOut('GETadmin-menus--menu--builder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-menus--menu--builder" onclick="cancelTryOut('GETadmin-menus--menu--builder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-menus--menu--builder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/menus/{menu}/builder</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="GETadmin-menus--menu--builder" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{menu}/order




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/menus/quod/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/quod/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-menus--menu--order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-menus--menu--order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-menus--menu--order"></code></pre>
</div>
<div id="execution-error-POSTadmin-menus--menu--order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-menus--menu--order"></code></pre>
</div>
<form id="form-POSTadmin-menus--menu--order" data-method="POST" data-path="admin/menus/{menu}/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-menus--menu--order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-menus--menu--order" onclick="tryItOut('POSTadmin-menus--menu--order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-menus--menu--order" onclick="cancelTryOut('POSTadmin-menus--menu--order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-menus--menu--order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/menus/{menu}/order</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="POSTadmin-menus--menu--order" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{menu}/item/{id}




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/menus/ducimus/item/officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/ducimus/item/officiis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-menus--menu--item--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-menus--menu--item--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-menus--menu--item--id-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-menus--menu--item--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-menus--menu--item--id-"></code></pre>
</div>
<form id="form-DELETEadmin-menus--menu--item--id-" data-method="DELETE" data-path="admin/menus/{menu}/item/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-menus--menu--item--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-menus--menu--item--id-" onclick="tryItOut('DELETEadmin-menus--menu--item--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-menus--menu--item--id-" onclick="cancelTryOut('DELETEadmin-menus--menu--item--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-menus--menu--item--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/menus/{menu}/item/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="DELETEadmin-menus--menu--item--id-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEadmin-menus--menu--item--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{menu}/item




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/menus/omnis/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/omnis/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-menus--menu--item" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-menus--menu--item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-menus--menu--item"></code></pre>
</div>
<div id="execution-error-POSTadmin-menus--menu--item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-menus--menu--item"></code></pre>
</div>
<form id="form-POSTadmin-menus--menu--item" data-method="POST" data-path="admin/menus/{menu}/item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-menus--menu--item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-menus--menu--item" onclick="tryItOut('POSTadmin-menus--menu--item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-menus--menu--item" onclick="cancelTryOut('POSTadmin-menus--menu--item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-menus--menu--item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/menus/{menu}/item</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="POSTadmin-menus--menu--item" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/menus/{menu}/item




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/menus/sed/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/menus/sed/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-menus--menu--item" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-menus--menu--item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-menus--menu--item"></code></pre>
</div>
<div id="execution-error-PUTadmin-menus--menu--item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-menus--menu--item"></code></pre>
</div>
<form id="form-PUTadmin-menus--menu--item" data-method="PUT" data-path="admin/menus/{menu}/item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-menus--menu--item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-menus--menu--item" onclick="tryItOut('PUTadmin-menus--menu--item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-menus--menu--item" onclick="cancelTryOut('PUTadmin-menus--menu--item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-menus--menu--item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/menus/{menu}/item</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="PUTadmin-menus--menu--item" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/settings




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-settings"></code></pre>
</div>
<div id="execution-error-GETadmin-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-settings"></code></pre>
</div>
<form id="form-GETadmin-settings" data-method="GET" data-path="admin/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-settings" onclick="tryItOut('GETadmin-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-settings" onclick="cancelTryOut('GETadmin-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/settings</code></b>
</p>
</form>


## admin/settings




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-settings"></code></pre>
</div>
<div id="execution-error-POSTadmin-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-settings"></code></pre>
</div>
<form id="form-POSTadmin-settings" data-method="POST" data-path="admin/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-settings" onclick="tryItOut('POSTadmin-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-settings" onclick="cancelTryOut('POSTadmin-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/settings</code></b>
</p>
</form>


## admin/settings




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-settings"></code></pre>
</div>
<div id="execution-error-PUTadmin-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-settings"></code></pre>
</div>
<form id="form-PUTadmin-settings" data-method="PUT" data-path="admin/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-settings" onclick="tryItOut('PUTadmin-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-settings" onclick="cancelTryOut('PUTadmin-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/settings</code></b>
</p>
</form>


## admin/settings/{id}




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/settings/iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings/iste"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-settings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-settings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-settings--id-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-settings--id-"></code></pre>
</div>
<form id="form-DELETEadmin-settings--id-" data-method="DELETE" data-path="admin/settings/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-settings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-settings--id-" onclick="tryItOut('DELETEadmin-settings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-settings--id-" onclick="cancelTryOut('DELETEadmin-settings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-settings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/settings/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEadmin-settings--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/settings/{id}/move_up




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/settings/qui/move_up" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings/qui/move_up"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-settings--id--move_up" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-settings--id--move_up"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-settings--id--move_up"></code></pre>
</div>
<div id="execution-error-GETadmin-settings--id--move_up" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-settings--id--move_up"></code></pre>
</div>
<form id="form-GETadmin-settings--id--move_up" data-method="GET" data-path="admin/settings/{id}/move_up" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-settings--id--move_up', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-settings--id--move_up" onclick="tryItOut('GETadmin-settings--id--move_up');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-settings--id--move_up" onclick="cancelTryOut('GETadmin-settings--id--move_up');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-settings--id--move_up" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/settings/{id}/move_up</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-settings--id--move_up" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/settings/{id}/move_down




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/settings/atque/move_down" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings/atque/move_down"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-settings--id--move_down" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-settings--id--move_down"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-settings--id--move_down"></code></pre>
</div>
<div id="execution-error-GETadmin-settings--id--move_down" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-settings--id--move_down"></code></pre>
</div>
<form id="form-GETadmin-settings--id--move_down" data-method="GET" data-path="admin/settings/{id}/move_down" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-settings--id--move_down', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-settings--id--move_down" onclick="tryItOut('GETadmin-settings--id--move_down');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-settings--id--move_down" onclick="cancelTryOut('GETadmin-settings--id--move_down');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-settings--id--move_down" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/settings/{id}/move_down</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-settings--id--move_down" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/settings/{id}/delete_value




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/settings/voluptatem/delete_value" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/settings/voluptatem/delete_value"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-settings--id--delete_value" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-settings--id--delete_value"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-settings--id--delete_value"></code></pre>
</div>
<div id="execution-error-PUTadmin-settings--id--delete_value" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-settings--id--delete_value"></code></pre>
</div>
<form id="form-PUTadmin-settings--id--delete_value" data-method="PUT" data-path="admin/settings/{id}/delete_value" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-settings--id--delete_value', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-settings--id--delete_value" onclick="tryItOut('PUTadmin-settings--id--delete_value');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-settings--id--delete_value" onclick="cancelTryOut('PUTadmin-settings--id--delete_value');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-settings--id--delete_value" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/settings/{id}/delete_value</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTadmin-settings--id--delete_value" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/media




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-media" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-media"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-media"></code></pre>
</div>
<div id="execution-error-GETadmin-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-media"></code></pre>
</div>
<form id="form-GETadmin-media" data-method="GET" data-path="admin/media" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-media', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-media" onclick="tryItOut('GETadmin-media');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-media" onclick="cancelTryOut('GETadmin-media');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-media" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/media</code></b>
</p>
</form>


## admin/media/files




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-files"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-files"></code></pre>
</div>
<form id="form-POSTadmin-media-files" data-method="POST" data-path="admin/media/files" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-files" onclick="tryItOut('POSTadmin-media-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-files" onclick="cancelTryOut('POSTadmin-media-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/files</code></b>
</p>
</form>


## admin/media/new_folder




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/new_folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/new_folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-new_folder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-new_folder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-new_folder"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-new_folder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-new_folder"></code></pre>
</div>
<form id="form-POSTadmin-media-new_folder" data-method="POST" data-path="admin/media/new_folder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-new_folder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-new_folder" onclick="tryItOut('POSTadmin-media-new_folder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-new_folder" onclick="cancelTryOut('POSTadmin-media-new_folder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-new_folder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/new_folder</code></b>
</p>
</form>


## admin/media/delete_file_folder




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/delete_file_folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/delete_file_folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-delete_file_folder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-delete_file_folder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-delete_file_folder"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-delete_file_folder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-delete_file_folder"></code></pre>
</div>
<form id="form-POSTadmin-media-delete_file_folder" data-method="POST" data-path="admin/media/delete_file_folder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-delete_file_folder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-delete_file_folder" onclick="tryItOut('POSTadmin-media-delete_file_folder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-delete_file_folder" onclick="cancelTryOut('POSTadmin-media-delete_file_folder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-delete_file_folder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/delete_file_folder</code></b>
</p>
</form>


## admin/media/move_file




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/move_file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/move_file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-move_file" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-move_file"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-move_file"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-move_file" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-move_file"></code></pre>
</div>
<form id="form-POSTadmin-media-move_file" data-method="POST" data-path="admin/media/move_file" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-move_file', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-move_file" onclick="tryItOut('POSTadmin-media-move_file');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-move_file" onclick="cancelTryOut('POSTadmin-media-move_file');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-move_file" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/move_file</code></b>
</p>
</form>


## admin/media/rename_file




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/rename_file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/rename_file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-rename_file" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-rename_file"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-rename_file"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-rename_file" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-rename_file"></code></pre>
</div>
<form id="form-POSTadmin-media-rename_file" data-method="POST" data-path="admin/media/rename_file" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-rename_file', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-rename_file" onclick="tryItOut('POSTadmin-media-rename_file');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-rename_file" onclick="cancelTryOut('POSTadmin-media-rename_file');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-rename_file" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/rename_file</code></b>
</p>
</form>


## admin/media/upload




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-upload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-upload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-upload"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-upload"></code></pre>
</div>
<form id="form-POSTadmin-media-upload" data-method="POST" data-path="admin/media/upload" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-upload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-upload" onclick="tryItOut('POSTadmin-media-upload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-upload" onclick="cancelTryOut('POSTadmin-media-upload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-upload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/upload</code></b>
</p>
</form>


## admin/media/crop




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/media/crop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/media/crop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-media-crop" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-media-crop"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-media-crop"></code></pre>
</div>
<div id="execution-error-POSTadmin-media-crop" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-media-crop"></code></pre>
</div>
<form id="form-POSTadmin-media-crop" data-method="POST" data-path="admin/media/crop" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-media-crop', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-media-crop" onclick="tryItOut('POSTadmin-media-crop');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-media-crop" onclick="cancelTryOut('POSTadmin-media-crop');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-media-crop" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/media/crop</code></b>
</p>
</form>


## admin/bread




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/bread" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-bread" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-bread"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-bread"></code></pre>
</div>
<div id="execution-error-GETadmin-bread" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-bread"></code></pre>
</div>
<form id="form-GETadmin-bread" data-method="GET" data-path="admin/bread" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-bread', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-bread" onclick="tryItOut('GETadmin-bread');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-bread" onclick="cancelTryOut('GETadmin-bread');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-bread" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/bread</code></b>
</p>
</form>


## Create BREAD.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/bread/optio/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread/optio/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-bread--table--create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-bread--table--create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-bread--table--create"></code></pre>
</div>
<div id="execution-error-GETadmin-bread--table--create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-bread--table--create"></code></pre>
</div>
<form id="form-GETadmin-bread--table--create" data-method="GET" data-path="admin/bread/{table}/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-bread--table--create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-bread--table--create" onclick="tryItOut('GETadmin-bread--table--create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-bread--table--create" onclick="cancelTryOut('GETadmin-bread--table--create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-bread--table--create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/bread/{table}/create</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>table</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="table" data-endpoint="GETadmin-bread--table--create" data-component="url" required  hidden>
<br>
</p>
</form>


## Store BREAD.




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/bread" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-bread" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-bread"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-bread"></code></pre>
</div>
<div id="execution-error-POSTadmin-bread" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-bread"></code></pre>
</div>
<form id="form-POSTadmin-bread" data-method="POST" data-path="admin/bread" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-bread', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-bread" onclick="tryItOut('POSTadmin-bread');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-bread" onclick="cancelTryOut('POSTadmin-bread');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-bread" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/bread</code></b>
</p>
</form>


## Edit BREAD.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/bread/temporibus/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread/temporibus/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-bread--table--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-bread--table--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-bread--table--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-bread--table--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-bread--table--edit"></code></pre>
</div>
<form id="form-GETadmin-bread--table--edit" data-method="GET" data-path="admin/bread/{table}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-bread--table--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-bread--table--edit" onclick="tryItOut('GETadmin-bread--table--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-bread--table--edit" onclick="cancelTryOut('GETadmin-bread--table--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-bread--table--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/bread/{table}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>table</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="table" data-endpoint="GETadmin-bread--table--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Update BREAD.




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/bread/eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread/eligendi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-bread--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-bread--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-bread--id-"></code></pre>
</div>
<div id="execution-error-PUTadmin-bread--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-bread--id-"></code></pre>
</div>
<form id="form-PUTadmin-bread--id-" data-method="PUT" data-path="admin/bread/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-bread--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-bread--id-" onclick="tryItOut('PUTadmin-bread--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-bread--id-" onclick="cancelTryOut('PUTadmin-bread--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-bread--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/bread/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTadmin-bread--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Delete BREAD.




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/bread/quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread/quasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-bread--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-bread--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-bread--id-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-bread--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-bread--id-"></code></pre>
</div>
<form id="form-DELETEadmin-bread--id-" data-method="DELETE" data-path="admin/bread/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-bread--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-bread--id-" onclick="tryItOut('DELETEadmin-bread--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-bread--id-" onclick="cancelTryOut('DELETEadmin-bread--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-bread--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/bread/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEadmin-bread--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Add Relationship.




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/bread/relationship" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread/relationship"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-bread-relationship" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-bread-relationship"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-bread-relationship"></code></pre>
</div>
<div id="execution-error-POSTadmin-bread-relationship" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-bread-relationship"></code></pre>
</div>
<form id="form-POSTadmin-bread-relationship" data-method="POST" data-path="admin/bread/relationship" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-bread-relationship', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-bread-relationship" onclick="tryItOut('POSTadmin-bread-relationship');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-bread-relationship" onclick="cancelTryOut('POSTadmin-bread-relationship');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-bread-relationship" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/bread/relationship</code></b>
</p>
</form>


## Delete Relationship.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/bread/delete_relationship/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/bread/delete_relationship/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-bread-delete_relationship--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-bread-delete_relationship--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-bread-delete_relationship--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-bread-delete_relationship--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-bread-delete_relationship--id-"></code></pre>
</div>
<form id="form-GETadmin-bread-delete_relationship--id-" data-method="GET" data-path="admin/bread/delete_relationship/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-bread-delete_relationship--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-bread-delete_relationship--id-" onclick="tryItOut('GETadmin-bread-delete_relationship--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-bread-delete_relationship--id-" onclick="cancelTryOut('GETadmin-bread-delete_relationship--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-bread-delete_relationship--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/bread/delete_relationship/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-bread-delete_relationship--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/database




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/database" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-database" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-database"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-database"></code></pre>
</div>
<div id="execution-error-GETadmin-database" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-database"></code></pre>
</div>
<form id="form-GETadmin-database" data-method="GET" data-path="admin/database" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-database', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-database" onclick="tryItOut('GETadmin-database');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-database" onclick="cancelTryOut('GETadmin-database');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-database" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/database</code></b>
</p>
</form>


## Create database table.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/database/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-database-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-database-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-database-create"></code></pre>
</div>
<div id="execution-error-GETadmin-database-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-database-create"></code></pre>
</div>
<form id="form-GETadmin-database-create" data-method="GET" data-path="admin/database/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-database-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-database-create" onclick="tryItOut('GETadmin-database-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-database-create" onclick="cancelTryOut('GETadmin-database-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-database-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/database/create</code></b>
</p>
</form>


## Store new database table.




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/database" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-database" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-database"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-database"></code></pre>
</div>
<div id="execution-error-POSTadmin-database" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-database"></code></pre>
</div>
<form id="form-POSTadmin-database" data-method="POST" data-path="admin/database" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-database', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-database" onclick="tryItOut('POSTadmin-database');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-database" onclick="cancelTryOut('POSTadmin-database');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-database" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/database</code></b>
</p>
</form>


## Show table.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/database/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database/minima"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-database--database-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-database--database-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-database--database-"></code></pre>
</div>
<div id="execution-error-GETadmin-database--database-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-database--database-"></code></pre>
</div>
<form id="form-GETadmin-database--database-" data-method="GET" data-path="admin/database/{database}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-database--database-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-database--database-" onclick="tryItOut('GETadmin-database--database-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-database--database-" onclick="cancelTryOut('GETadmin-database--database-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-database--database-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/database/{database}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="GETadmin-database--database-" data-component="url" required  hidden>
<br>
</p>
</form>


## Edit database table.




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/database/nesciunt/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database/nesciunt/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-database--database--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-database--database--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-database--database--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-database--database--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-database--database--edit"></code></pre>
</div>
<form id="form-GETadmin-database--database--edit" data-method="GET" data-path="admin/database/{database}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-database--database--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-database--database--edit" onclick="tryItOut('GETadmin-database--database--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-database--database--edit" onclick="cancelTryOut('GETadmin-database--database--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-database--database--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/database/{database}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="GETadmin-database--database--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## Update database table.




> Example request:

```bash
curl -X PUT \
    "http://fashionette.test/admin/database/fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database/fuga"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-database--database-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-database--database-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-database--database-"></code></pre>
</div>
<div id="execution-error-PUTadmin-database--database-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-database--database-"></code></pre>
</div>
<form id="form-PUTadmin-database--database-" data-method="PUT" data-path="admin/database/{database}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-database--database-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-database--database-" onclick="tryItOut('PUTadmin-database--database-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-database--database-" onclick="cancelTryOut('PUTadmin-database--database-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-database--database-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/database/{database}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/database/{database}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="PUTadmin-database--database-" data-component="url" required  hidden>
<br>
</p>
</form>


## Destroy table.




> Example request:

```bash
curl -X DELETE \
    "http://fashionette.test/admin/database/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/database/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-database--database-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-database--database-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-database--database-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-database--database-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-database--database-"></code></pre>
</div>
<form id="form-DELETEadmin-database--database-" data-method="DELETE" data-path="admin/database/{database}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-database--database-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-database--database-" onclick="tryItOut('DELETEadmin-database--database-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-database--database-" onclick="cancelTryOut('DELETEadmin-database--database-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-database--database-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/database/{database}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="DELETEadmin-database--database-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/compass




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/compass" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/compass"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://fashionette.test/admin/login'" />

        <title>Redirecting to http://fashionette.test/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://fashionette.test/admin/login">http://fashionette.test/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-compass" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-compass"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-compass"></code></pre>
</div>
<div id="execution-error-GETadmin-compass" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-compass"></code></pre>
</div>
<form id="form-GETadmin-compass" data-method="GET" data-path="admin/compass" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-compass', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-compass" onclick="tryItOut('GETadmin-compass');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-compass" onclick="cancelTryOut('GETadmin-compass');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-compass" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/compass</code></b>
</p>
</form>


## admin/compass




> Example request:

```bash
curl -X POST \
    "http://fashionette.test/admin/compass" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/compass"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-compass" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-compass"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-compass"></code></pre>
</div>
<div id="execution-error-POSTadmin-compass" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-compass"></code></pre>
</div>
<form id="form-POSTadmin-compass" data-method="POST" data-path="admin/compass" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-compass', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-compass" onclick="tryItOut('POSTadmin-compass');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-compass" onclick="cancelTryOut('POSTadmin-compass');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-compass" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/compass</code></b>
</p>
</form>


## admin/voyager-assets




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/admin/voyager-assets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/admin/voyager-assets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "File does not exist at path D:\\travail\\development\\laravel\\fashionette\\vendor\\tcg\\voyager\/publishable\/assets\/.",
    "exception": "Illuminate\\Contracts\\Filesystem\\FileNotFoundException",
    "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
    "line": 57,
    "trace": [
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 261,
            "function": "get",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\tcg\\voyager\\src\\Http\\Controllers\\VoyagerController.php",
            "line": 94,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "assets",
            "class": "TCG\\Voyager\\Http\\Controllers\\VoyagerController",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 60,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 68,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Concerns\\CallsCommands.php",
            "line": 28,
            "function": "runCommand",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\app\\Console\\Commands\\InstallProject.php",
            "line": 44,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "App\\Console\\Commands\\InstallProject",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\travail\\development\\laravel\\fashionette\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETadmin-voyager-assets" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-voyager-assets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-voyager-assets"></code></pre>
</div>
<div id="execution-error-GETadmin-voyager-assets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-voyager-assets"></code></pre>
</div>
<form id="form-GETadmin-voyager-assets" data-method="GET" data-path="admin/voyager-assets" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-voyager-assets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-voyager-assets" onclick="tryItOut('GETadmin-voyager-assets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-voyager-assets" onclick="cancelTryOut('GETadmin-voyager-assets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-voyager-assets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/voyager-assets</code></b>
</p>
</form>


## {any}




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/debitis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fashionette</title>

    <link rel="stylesheet" href="http://fashionette.test/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="http://fashionette.test/css/app.css">
</head>

<body class="antialiased">


<div id="app"></div>


<script src="http://fashionette.test/js/app.js"></script>
</body>

</html>

```
<div id="execution-results-GET-any-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-any-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-any-"></code></pre>
</div>
<div id="execution-error-GET-any-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-any-"></code></pre>
</div>
<form id="form-GET-any-" data-method="GET" data-path="{any}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET-any-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-any-" onclick="tryItOut('GET-any-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-any-" onclick="cancelTryOut('GET-any-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-any-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>{any}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>any</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="any" data-endpoint="GET-any-" data-component="url" required  hidden>
<br>
</p>
</form>



