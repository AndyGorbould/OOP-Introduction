# OOP-Introduction

The goal of these exercises is to learn how OOP works in PHP, the correct useage of access modifiers (public, private, protected), & how to debug errors when these are set differently. Type Hinting; an extremely important feature to make sure the correct datatype is accessed (int, bool etc).

Exercise 1
Creation of a "class" with properties of different datatypes (string, float etc).
Property defaults; ($this->temperature = "cold";) >> do not put this in the __construct >> modify through a "setter" (following exercises!)
Class function getInfo() with void return type (this is to stop the func returning a value as it has an "echo" directly in it)
How to use __construct to create a new object

Exercise 2
Extend a class, essentially a sub-class
Create properties that are only applicable to the extended class
A new __construct that will set properties for the extension & parent
Different ways to access a value, with a function or direct eg. obj->getData() || obj->data

Exercise 3
Understanding "private" access, getters & setters
Private method, only accessable when a getter is made

Exercise 4
Access Modifiers:
    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class
        :: taken from W3 Schools ::

Exercise 5
How to use an if statement within a setter, this was used to stop the posibility of a negative value