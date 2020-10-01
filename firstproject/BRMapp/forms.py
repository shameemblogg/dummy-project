from django import forms

class NewBookForm(forms.Form):
    title=forms.CharField(label='Title',max_length=100)
    price=forms.FloatField(label='price')
    author=forms.CharField(label='author')
    publisher=forms.CharField(label='publisher')

class SearchForm(forms.Form):
    title=forms.CharField(label='title',max_length=100) 
