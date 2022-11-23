#import libraries
import requests
from bs4 import BeautifulSoup as bs
import sys

def search(url):
  #this function will download the html page, select all <p> tags and return it as an array

  #download page
  page = requests.get(url)
  soup = bs(page.content, 'html.parser')

  #select all <p> tags
  array_p = soup('p')

  return array_p

def only_text(array_p):
  #this function will extract all the text from the <p> tags array and concatenate all in a single text

  #pick only text
  text = ''

  for i in range(0, len(array_p)):
    text += array_p[i].getText()

  #remove unnecessary spaces, line breaks and tabs
  text = text.strip().replace('\n', ' ').replace('\t', '')

  return '{}'.format(text)


def reading_time(text):
  #this function will calculate the reading time of a given text

  #measure the words number and define the reading speed
  words = len(text.split(' '))
  speed = 130 #average reading speed

  #measure reading time
  hours = 0
  minutes = int(words / speed)
  seconds = 0
      
  if (minutes > 59):
      hours = int(minutes / 60)
      minutes = minutes % 60


  if (words % speed > 0):
      seconds = int( ((words % speed) * 60) / speed)

  return '{} horas, {} minutos e {} segundos {}'.format(hours, minutes, seconds, text)

url = sys.argv[1]

page = search(url)
text = only_text(page)
time = reading_time(text)

print(time)