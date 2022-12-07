import { createElement } from 'react';
import ProLayout, { DefaultFooter } from '@ant-design/pro-layout';
import { Link } from 'ice';
import { asideMenuConfig } from './menuConfig';

const loopMenuItem = (menus) =>
  menus.map(({icon, children, ...item}) => ({
    ...item,
    icon: createElement(icon),
    children: children && loopMenuItem(children),
  }));

export default function BasicLayout({children, location}) {
  return (
    <ProLayout
      title="PHPEIMS"
      style={{
        minHeight: '100vh',
      }}
      location={{
        pathname: location.pathname,
      }}
      menuDataRender={() => loopMenuItem(asideMenuConfig)}
      menuItemRender={(item, defaultDom) => {
        if (!item.path) {
          return defaultDom;
        }
        return <Link to={item.path}>{defaultDom}</Link>;
      }}
      footerRender={() => (
        <DefaultFooter
          links={[]}
          copyright="2021 PHPEIMS"
        />
      )}
    >
      <div style={{minHeight: '60vh'}}>{children}</div>
    </ProLayout>
  );
}