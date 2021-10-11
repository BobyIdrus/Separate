a = "Visual Python"
def myfunc():
  print("Mari Belajar " + a)
myfunc()

print("----------------------")

b = "Visual Python"
def myfunc():
  b = "Python"
  print("Mari Belajar " + b)
myfunc()
print("Mari Belajar " + b)

print("----------------------")

def myfunc():
  global c
  c = "Python"
myfunc()
print("Mari Belajar " + c)

print("----------------------")

d = "Visual Python"
def myfunc():
  global d
  d = "Python"
myfunc()
print("Mari Belajar " + d)