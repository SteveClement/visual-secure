import rabbyt
import pygame
import time
import random

import os.path
# We do this so that you don't have to be in the same directory as the script
# to use it.
rabbyt.data_directory = os.path.dirname(__file__)

random.seed()
pygame.init()

# Make sure that you allways have an OpenGL window created before loading
# textures:
pygame.display.set_mode((640, 480), pygame.OPENGL | pygame.DOUBLEBUF)

rabbyt.set_viewport((640, 480))
rabbyt.set_default_attribs()

# Creating a sprite is easy.  Just give it an image filename.
car = rabbyt.Sprite("bt-ico.png", xy=(0,0))

while not pygame.event.get(pygame.QUIT):
    rabbyt.clear((random.randint(1,255),random.randint(1,255),random.randint(1,255)))

    car.render()

    pygame.display.flip()

    time.sleep(1)
