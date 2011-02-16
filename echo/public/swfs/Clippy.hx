import flash.display.MovieClip;
import flash.events.MouseEvent;
import flash.display.SimpleButton;
import flash.external.ExternalInterface;
import flash.events.Event;
import flash.system.System;

class Clippy extends SimpleButton {
  // Main
  static function main() {
    flash.system.Security.allowDomain("*");

    flash.Lib.current.stage.scaleMode = flash.display.StageScaleMode.NO_SCALE;
    flash.Lib.current.stage.align     = flash.display.StageAlign.TOP_LEFT;

    flash.Lib.current.addChild(new Clippy());
  }

  var callBack:String;
  var text:String;

  public function new() {
    super();

    useHandCursor    = true;
    upState          = flash.Lib.attach("button_up");
    overState        = flash.Lib.attach("button_over");
    downState        = flash.Lib.attach("button_down");
    hitTestState     = flash.Lib.attach("button_down");

    addEventListener(Event.ADDED_TO_STAGE, onAddedToStage);
    flash.Lib.current.stage.addEventListener(Event.RESIZE, onStageResize);
  }

  function onAddedToStage(e:Event) {
    onStageResize(null);

    var id:String = flash.Lib.current.stage.loaderInfo.parameters.id;
    text          = flash.Lib.current.stage.loaderInfo.parameters.text;

    if (id != null) {
      callBack = "function (event) {
        var clippy = document.getElementById('" + id + "');
        if (clippy != null && typeof clippy[event] === 'function') {
          var clipboard = clippy[event].call(clippy);
          if (event === 'onClick') {
            return clipboard;
          }
        }
      }";
    } else {
      callBack = "function () {}";
    }

    // Add hooks to for javascript to call
    ExternalInterface.addCallback("enable", enable);
    ExternalInterface.addCallback("disable", disable);

    // Let javascript know we are ready for use
    enable();
    ExternalInterface.call(callBack, "onLoaded");
  }

  function onStageResize(e:Event) {
    width  = flash.Lib.current.stage.stageWidth;
    height = flash.Lib.current.stage.stageHeight;
  }

  public function enable() {
    enabled = true;
    addEventListener(MouseEvent.CLICK, onMouseEvent);
    addEventListener(MouseEvent.MOUSE_OVER, onMouseEvent);
    addEventListener(MouseEvent.MOUSE_OUT, onMouseEvent);
    addEventListener(MouseEvent.MOUSE_DOWN, onMouseEvent);
    addEventListener(MouseEvent.MOUSE_UP, onMouseEvent);
  }

  public function disable() {
    enabled = false;
    removeEventListener(MouseEvent.CLICK, onMouseEvent);
    removeEventListener(MouseEvent.MOUSE_OVER, onMouseEvent);
    removeEventListener(MouseEvent.MOUSE_OUT, onMouseEvent);
    removeEventListener(MouseEvent.MOUSE_DOWN, onMouseEvent);
    removeEventListener(MouseEvent.MOUSE_UP, onMouseEvent);
  }

  function onMouseEvent(e:MouseEvent) {
    switch(e.type) {
      case MouseEvent.CLICK:
        if (text != null) {
          System.setClipboard(text);
        } else {
          System.setClipboard(ExternalInterface.call(callBack, "onClick"));
        }
      case MouseEvent.MOUSE_OVER:
        ExternalInterface.call(callBack, "onMouseEnter");
      case MouseEvent.MOUSE_OUT:
        ExternalInterface.call(callBack, "onMouseLeave");
      case MouseEvent.MOUSE_DOWN:
        ExternalInterface.call(callBack, "onMouseDown");
      case MouseEvent.MOUSE_UP:
        ExternalInterface.call(callBack, "onMouseUp");
    }
  }
}
