// import Image from 'next/image'
// import Signature from 'assets/img/signature.png'
import Icons from 'components/Icons'
import Link from 'next/link'
type HeaderProps = {}

const Header: React.FC<HeaderProps> = () => {
  return (
    <header className="fixed bg-swatch_1 z-50 w-full h-20 flex items-center justify-between px-20">
      <nav>
        <ul className="inline-flex gap-6 text-sm font-bold uppercase font-source-sans">
          <li>
            <Link href="/work">Work</Link>
          </li>
          <li>
            <Link href="/about">About</Link>
          </li>
          <li>
            <Link href="/contact">Contact</Link>
          </li>
        </ul>
      </nav>
      {/* <Image
        src={Signature}
        objectFit="contain"
        alt="Thuong Da Dev Signature"
      /> */}
      {/* Social Media */}
      <ul className="inline-flex gap-6">
        <li>
          <Link href="https://www.facebook.com/thuongdadev/" passHref>
            <a rel="noopener noreferrer" target="_blank">
              <Icons.Facebook />
            </a>
          </Link>
        </li>
        <li>
          <Link href="https://github.com/ngthuongdoan" passHref>
            <a rel="noopener noreferrer" target="_blank">
              <Icons.Github />
            </a>
          </Link>
        </li>
        <li>
          <Link href="https://www.linkedin.com/in/ngthuongdoan/" passHref>
            <a rel="noopener noreferrer" target="_blank">
              <Icons.Linkedin />
            </a>
          </Link>
        </li>
        <li>
          <a href="/file/cv.pdf" rel="noopener noreferrer" download>
            <Icons.Download />
          </a>
        </li>
      </ul>
    </header>
  )
}

export default Header
