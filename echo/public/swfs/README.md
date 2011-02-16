Clippy - Helping you copy text to your clipboard (get the text form html element id)
================================================

Here is a sample Rails helper that can be used to place Clippy on a page:

    # Generates clippy embed code with the given options. From the options one of
    # <tt>:text</tt>, <tt>:id</tt>, or <tt>:call</tt> has to be provided.
    #
    # === Supported options
    # [:text]
    #   Text to be copied to the clipboard.
    # [:id]
    #   Id of a DOM element from which the text should be taken. If it is a form
    #   element the <tt>value</tt> attribute, otherwise the <tt>innerHTML</tt>
    #   attribute will be used.
    # [:call]
    #   A name of a javascript function to be called for the text.
    # [:copied]
    #   Label text to show next to the icon after a successful copy action.
    # [:copyto]
    #   Label text to show next to the icon before it is clicked.
    # [:callBack]
    #   A name of a javascript function to be called after a successful copy
    #   action. The function will be called with one argument which is the value
    #   of the <tt>text</tt>, <tt>id</tt>, or <tt>call</tt> parameter, whichever
    #   was used.
    def clippy(options={})
      options = options.symbolize_keys
      if options[:text].nil? and options[:id].nil? and options[:call].nil?
        raise(ArgumentError, "at least :text, :id, or :call has to be provided")
      end
      bg_color = options.delete(:bg_color)
      query_string = options.to_query
      html = <<-EOF
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
                width="110"
                height="14"
                id="clippy-#{rand().object_id}" >
        <param name="movie" value="/flash/clippy.swf" />
        <param name="allowScriptAccess" value="always" />
        <param name="quality" value="high" />
        <param name="scale" value="noscale" />
        <param NAME="FlashVars" value="#{query_string}">
        <param name="bgcolor" value="#{bg_color}">
        <embed src="/flash/clippy.swf"
               width="110"
               height="14"
               name="clippy"
               quality="high"
               allowScriptAccess="always"
               type="application/x-shockwave-flash"
               pluginspage="http://www.macromedia.com/go/getflashplayer"
               FlashVars="#{query_string}"
               bgcolor="#{bg_color}"
        />
        </object>
      EOF
    end

Installation (Pre-Built SWF)
---------------------------

If you want to use Clippy unmodified, just copy `build/clippy.swf` to your
`public` directory or wherever your static assets can be found.

Installation (Compiling)
------------------------

In order to compile Clippy from source, you need to install the following:

* [haXe](http://haxe.org/)
* [swfmill](http://swfmill.org/)

The haXe code is in `clippy.hx`, the button images are in `assets`, and the
compiler config is in `compile.hxml`. Make sure you look at all of these to
see where and what you'll need to modify. To compile everything into a final
SWF, run the following from Clippy's root directory:

    swfmill simple library.xml library.swf && haxe compile.hxml

If that is successful, copy `build/clippy.swf` to your
`public` directory or wherever your static assets can be found.

Contribute
----------

If you'd like to hack on Clippy, start by forking my repo on GitHub:

http://github.com/mojombo/clippy

The best way to get your changes merged back into core is as follows:

1. Clone down your fork
1. Create a topic branch to contain your change
1. Hack away
1. If you are adding new functionality, document it in README.md
1. If necessary, rebase your commits into logical chunks, without errors
1. Push the branch up to GitHub
1. Send me (mojombo) a pull request for your branch

License
-------

MIT License (see LICENSE file)
