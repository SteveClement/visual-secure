import rabbyt
from pyglet.window import Window

from pyglet import font
import time

import scan_results

import random

random.seed()

candidates = None
num = 0
iterator = 0
num_candidates = len(scan_results.result)


window = Window(width=1024, height=768)
rabbyt.set_default_attribs()

class SpriteText(rabbyt.BaseSprite):
    def __init__(self, ft, text="", *args, **kwargs):
        rabbyt.BaseSprite.__init__(self, *args, **kwargs)
        self._text = font.Text(ft, text)

    def set_text(self, text):
        self._text.text = text

    def render_after_transform(self):
        self._text.color = self.rgba
        self._text.draw()

ft = font.load('Helvetica', 24)

sprite = SpriteText(ft, scan_results.result[1][1], xy=(0,0))
sprite.rot = rabbyt.lerp(0,360, dt=5, extend="extrapolate")
sprite.rgb = rabbyt.lerp((1,0,0), (0,1,0), dt=2, extend="reverse")

sprite_counter = SpriteText(ft, u'0', xy=(0,0))
sprite_counter.rot = rabbyt.lerp(0,360, dt=5, extend="extrapolate")
sprite_counter.rgb = rabbyt.lerp((1,0,0), (0,1,0), dt=2, extend="reverse")

itera = u'0'

while not window.has_exit:
    iterator = iterator + 1
    iterator2 = iterator + 20
    itera = u'%s' % iterator
    if iterator == 50:
        rabbyt.clear()
    window.dispatch_events()

##    rabbyt.clear()
    sprite.render()
    sprite_counter.render()

    time.sleep(0.3)
    window.flip()
    
    sprite = SpriteText(ft, scan_results.result[num][1], xy=(random.randint(0,1023),random.randint(0,767)))
    sprite_counter = SpriteText(ft, itera, xy=(0,0))
    num = num + 1

    if num == num_candidates:
        num = 0
