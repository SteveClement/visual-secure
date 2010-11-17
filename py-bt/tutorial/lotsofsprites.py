import random

import rabbyt
from rabbyt import lerp, wrap
import pygame
import os.path
rabbyt.data_directory = os.path.dirname(__file__)
import time

pygame.init()
pygame.display.set_mode((1024, 768), pygame.OPENGL | pygame.DOUBLEBUF)
rabbyt.set_viewport((1024, 768))
rabbyt.set_default_attribs()


sprites = []

r = lambda: random.random()-.5

for i in range(2400):
    s = rabbyt.Sprite("bt-ico.png")
# Put color on the sprite
#    s.rgba = lerp((.5,.2,1,.2), (0,.8,0,.6), dt=3*r()+2, extend="reverse")

    s.x = wrap([-640,640], lerp(r()*1024, r()*1024, dt=2, extend="extrapolate"))
    s.y = wrap([-384,384], lerp(r()*768, r()*768, dt=2, extend="extrapolate"))

#    s.scale = lerp(.1, 1, dt=r()+.75, extend="reverse")

#    s.rot = lerp(0, 360, dt=2, extend="extrapolate")

    sprites.append(s)

print "Drawing 2400 sprites..."

c = pygame.time.Clock()
last_fps = 0
while not pygame.event.get(pygame.QUIT):
    c.tick()
    if pygame.time.get_ticks() - last_fps > 1000:
        print "FPS: ", c.get_fps()
        last_fps = pygame.time.get_ticks()
    rabbyt.clear()
    rabbyt.set_time(pygame.time.get_ticks()/1000.0)
    rabbyt.render_unsorted(sprites)
    pygame.display.flip()
    time.sleep(0.1)
