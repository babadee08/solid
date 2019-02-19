## Liskov Substitution Principle

#### States that:

Let _q(x)_ be a property provable about objects _x_ of type `T`

Then _q(y)- should be provable for objects _y_ of type `S` where `S` is a subtype of `T`

A.K.A

Derived classes must be substitutable for their base classes OR

Any implementation of an abstraction or an interface should be substitutable anywhere that the abstraction is accepted,

Ways to adhere
- Signature must match
- Preconditions can't be greater
- Post conditions at least equal to
- Exceptions types must match

