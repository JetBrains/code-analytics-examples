package com.jetbrains.sa;

@SuppressWarnings("unused")
public class BadExceptionNameClass extends RuntimeException {
}

// Condition is always true
class Main {
    public static void main(String[] args) {
        if (true) {

        }
    }
}