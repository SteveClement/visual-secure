import vobject

vcf = open('pb.vcf')

contact = vobject.readOne(vcf)

contact.prettyPrint()
