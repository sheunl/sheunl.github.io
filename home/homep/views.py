from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def home_view(request):
    #return HttpResponse('x')
    return render(request,'home.html')

def cv_view(request):
    return render(request,'cv.html')