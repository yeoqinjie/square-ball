import gnupg


def encrypt(infile, output='cimb/encrypted.txt.pgp'):
    key = open('public.id', 'rb').read()
    gpg = gnupg.GPG(gnupghome='cimb/gpg')
    keys = gpg.import_keys(key)

    infile = open(infile, 'rb')
    encrypted = gpg.encrypt_file(infile, recipients=keys.fingerprint, output=output)

