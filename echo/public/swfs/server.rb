require 'rubygems'
require 'sinatra'
set :public, File.dirname(__FILE__)

get '/' do
  %q{
    <html>
      <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Test</title>
      </head>

      <body>
        <script type='text/javascript'>
          function test_1_call_back() { alert('callBack 1'); }
          function test_2_call_back() { alert('callBack 2'); }
        </script>

        <object height="14" width="110" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id='test1'>
          <param value="/build/clippy.swf" name="movie"/>
          <param value="always" name="allowScriptAccess"/>
          <param value="high" name="quality"/>
          <param value="noscale" name="scale"/>
          <param value="id=test_1&copied=copied&copyto=copyToClipboard" name="FlashVars"/>
          <param value="#FFFFFF" name="bgcolor"/>
          <embed height="14" width="110" bgcolor="#FFFFFF" flashvars="id=test_1&copied=copied!&copyto=copyToClipboard" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" name="clippy" src="/build/clippy.swf"/>
        </object>

        <textarea id="test_1">this is test 1</textarea>

        <object height="14" width="110" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id='test2'>
          <param value="/build/clippy.swf" name="movie"/>
          <param value="always" name="allowScriptAccess"/>
          <param value="high" name="quality"/>
          <param value="noscale" name="scale"/>
          <param value="id=test_2&copied=copied&copyto=copyToClipboard&callBack=test_2_call_back" name="FlashVars"/>
          <param value="#FFFFFF" name="bgcolor"/>
          <embed height="14" width="110" bgcolor="#FFFFFF" flashvars="id=test_2&copied=copied!&copyto=copyToClipboard&callBack=test_2_call_back" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" name="clippy" src="/build/clippy.swf"/>
        </object>

        <div id="test_2">this is test 2</div>
      </body>
    </html>
  }
end
