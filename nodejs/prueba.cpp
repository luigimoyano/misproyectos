
// Faltan estas dos librerias, asi que todavia no se puede hacer nada.
#include <v8.h>
#include <node.h>
 
using namespace node;
using namespace v8;
 
static Handle<Value> foo(const Arguments& args)
{
  return String::New("Hello World");
}
 
extern "C" void init(Handle<Object> target)
{
  NODE_SET_METHOD(target, "foo", foo);
}