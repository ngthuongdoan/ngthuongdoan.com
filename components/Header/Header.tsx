// import Image from 'next/image'
// import Signature from 'assets/img/signature.png'
import Icons from 'components/Icons'
import Link from 'next/link'
import { useState } from 'react'
type HeaderProps = {}

const Header: React.FC<HeaderProps> = () => {
  const [toggle, setToggle] = useState(false)
  return (
    <header className="fixed bg-swatch_1 z-50 w-full h-20  px-4 md:px-20">
      <div className="h-20 hidden md:flex items-center justify-between">
        <nav className="">
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
      </div>
      <div className="flex md:hidden h-20 items-center justify-end">
        <button
          className="p-2 text-gray-600 transition bg-gray-100 rounded hover:text-gray-600/75"
          onClick={() => setToggle(true)}
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="w-5 h-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            strokeWidth="2"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
        </button>
      </div>
      {toggle && (
        <section className="fixed inset-y-0 right-0 z-50 flex">
          <div className="w-screen max-w-sm">
            <div className="flex flex-col h-full bg-white">
              <div className="overflow-y-scroll">
                <header className="flex items-center justify-between h-16 pl-6">
                  <span className="text-sm font-medium tracking-widest uppercase"></span>

                  <button
                    aria-label="Close menu"
                    className="w-16 h-16 border-l border-gray-200"
                    type="button"
                    onClick={() => setToggle(false)}
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      className="w-5 h-5 mx-auto"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M6 18L18 6M6 6l12 12"
                      />
                    </svg>
                  </button>
                </header>

                <nav className="flex flex-col text-sm font-medium text-gray-500 border-t border-b border-gray-200 divide-y divide-gray-200">
                  <li className="px-6 py-3 list-none">
                    <Link href="/work">Work</Link>
                  </li>
                  <li className="px-6 py-3 list-none">
                    <Link href="/about">About</Link>
                  </li>
                  <li className="px-6 py-3 list-none">
                    <Link href="/contact">Contact</Link>
                  </li>
                </nav>

                <ul className="px-6 py-10 inline-flex gap-12 items-center justify-center w-full">
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
                    <Link
                      href="https://www.linkedin.com/in/ngthuongdoan/"
                      passHref
                    >
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
              </div>
            </div>
          </div>
        </section>
      )}
    </header>
  )
}

export default Header
