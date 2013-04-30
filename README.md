Testing utilities
==
This package contains utilities for testing.

Discovery
--
This tool discovers classes without `@test` reference inside the 'lang' package and all of its subpackages:

```sh
$ doclet net.xp_forge.tests.Untested lang.**
```

This tool discovers tests for a given class, package, or combination of both:

```sh
$ doclet net.xp_forge.tests.UnittestsOf lang.XPClass
```

