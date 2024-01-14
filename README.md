# gab-solid-principle
Example of SOLID Principle

Single Responsibility Principle
This principle is about actors and high level architecture.

A class should have one, and only one, reason to change. It maintainability by ensuring that changes to a specific functionality only affect one class.

Open Closed Principle
This principle is about class design and feature extensions. It promotes maintainability and avoids introducing bugs in the existing codebase.

A class should be open for extension, but closed for modification.

Liskov Substitution Principle
Objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program. LSP ensures that derived classes can be used as substitutes for their base classes. This principle prevents unexpected behavior when inheriting from a base class.

Interface Segregation Principle
A client should not be forced to depend on interfaces it does not use. This way, clients can implement only the methods they need, avoiding unnecessary dependencies.

Many client-specific interfaces are better than one general-purpose interface.

Dependency Inversion Principle
This principle wires up all other four principles in a single circle. High-level modules should not depend on low-level modules. Both should depend on abstractions. This principle allows for flexible and easily maintainable code, promoting code reusability.