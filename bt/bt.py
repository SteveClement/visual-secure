class Devices:
   def __init__( self, target_device_name):
      self.target_device=target_device_name
      self.target_device_address= None

   def check_devices(self):
      discovered_devices=discover_devices()
      for address in discovered_devices:
        if self.target_device==lookup_name(address):
          self.target_device_address=address
        break

   def device_found(self):
      self.check_devices()

      if self.target_device_address is not None:
       return self.target_device_address
      else:
       return None

user_device= raw_input("Enter the device to be discovered:")
device = Devices(user_device)
addr = device.device_found()

if addr is not None:
      print "The address for the device is :". Adder
else:
      print "The device could not be discovered"
